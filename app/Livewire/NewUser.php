<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash; 
use Livewire\Component;

class NewUser extends Component
{
    public $name;
    public $email;
    public $password;

    public function submit()
    {
        
        // Validate the input data
        $this->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        // Create a new user with hashed password
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password), // Hash the password
        ]);

        // Reset the form fields after creating the user
        $this->reset(['name', 'email', 'password']);

        // Flash a success message
        session()->flash('message', 'User successfully created!');
    }

    public function render()
    {
        return view('livewire.new-user',
    [
        'users'=> User::all(),
    ]);
        
    }
}
