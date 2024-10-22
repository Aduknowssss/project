<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class NewUser extends Component
{

    public $name;
    public $email;
    public $password;

    public function submit(){
        User::create([
            'name' => $this ->name,
            'email' => $this ->email,
            'password' => $this ->password,

        ]);


    }
    public function render()
    {
        return view('livewire.new-user');
    }
}