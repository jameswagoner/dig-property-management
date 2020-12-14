<?php

namespace App\Http\Livewire\Staff;

use App\Models\User;
use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;
use Laravel\Fortify\Rules\Password;
use Livewire\Component;

class NewStaff extends Component
{
    public $name;
    public $email;
    public $password;
    public $group;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'group' => 'required'
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

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        $this->dispatchBrowserEvent('toast', 'Staff member was added!');
        $this->redirectRoute('staff.list');
    }

    public function render()
    {
        return view('livewire.staff.new-staff');
    }
}
