<div class="flex p-10 items-center flex-col">
    <h1 class="text-3xl mb-2">User</h1>

    @if (session()->has('message'))
    <div class="alert alert-success bg-green-500 text-white mb-4">
        {{ session('message') }}
    </div>
    @endif

        <div class="mt-6 w-1/2">
            <input wire:model.live="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" required />
        </div>
             @error('name')
                 <span class="text-red-500 text-sm">{{ $message }}</span>
             @enderror      

        <div class="mt-6 w-1/2">
            <input wire:model.live="email" type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required />
             </div>
             @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
             @enderror  
       

        <div class="mt-6 w-1/2">
            <input wire:model.live="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password" required />
        </div>
            @error('password')
              <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
       

        <div class="mt-6">
            <button type="submit" wire:click="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>


    <div class="mt-8 p-10">
        <h2 class="text-2xl font-semibold mb-4">Registered Users</h2>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 text-left text-gray-900">Name</th>
                    <th class="py-2 px-4 text-left text-gray-900">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td class="py-2 px-4 border-t border-gray-200">{{ $user->name }}</td>
                    <td class="py-2 px-4 border-t border-gray-200">{{ $user->email }}</td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>
