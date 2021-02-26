<?php

namespace App\Http\Livewire\Staff;

use App\Models\User;
use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;
use Illuminate\Support\Facades\Hash;
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

        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        $user->assignRole($this->role);


        $this->redirectRoute('staff.index');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.staff.create');
    }
}
