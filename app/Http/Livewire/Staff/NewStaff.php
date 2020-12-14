<?php

namespace App\Http\Livewire\Staff;

use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;
use Laravel\Fortify\Rules\Password;
use Livewire\Component;

class NewStaff extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
    ];

    public function generatePassword()
    {
        $generator = (new ComputerPasswordGenerator())
            ->setUppercase()
            ->setLowercase()
            ->setNumbers()
            ->setSymbols()
            ->setLength(12);

        $this->password = $generator->generatePassword();
    }

    public function save()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.staff.new-staff');
    }
}
