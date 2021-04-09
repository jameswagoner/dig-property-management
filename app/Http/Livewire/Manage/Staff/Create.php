<?php

namespace App\Http\Livewire\Manage\Staff;

use App\Models\User;
use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Livewire\Component;

class Create extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $role;

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'role' => 'required'
    ];

    public function generatePassword(): void
    {
        $generator = (new ComputerPasswordGenerator())
            ->setUppercase()
            ->setLowercase()
            ->setNumbers()
            ->setSymbols()
            ->setLength(12);

        $this->password = $generator->generatePassword();
    }

    public function save(): void
    {
        $this->validate();

        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        $user->assignRole($this->role);


        $this->redirectRoute('staff.index');
    }

    public function render(): View
    {
        return view('livewire.staff.create');
    }
}
