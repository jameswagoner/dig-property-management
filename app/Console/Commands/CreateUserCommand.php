<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUserCommand extends Command
{
    protected $signature = 'dig:create-user';

    protected $description = 'Create a user via command line';

    public function handle()
    {
        $user = User::create([
            'first_name' => $this->ask('First name?'),
            'last_name' => $this->ask('Last name?'),
            'email' => $this->ask('Email?'),
            'number' => $this->ask('Number?'),
            'password' => Hash::make('password')
        ]);

        $user->assignRole($this->ask('Wich role?'));

        $this->info('User created with password: password');
    }
}
