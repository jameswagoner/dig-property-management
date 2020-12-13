<?php

namespace App\Http\Livewire\Staff;

use Livewire\Component;

class NewStaff extends Component
{
    public $staff;

    protected $rules = [
        'staff.name' => 'required',
        'staff.email' => 'required|email|unique:users'
    ];

    protected $messages = [
        'staff.name.required' => "The staff member's name is required",
        'staff.email.required' => "A valid email address is required"
    ];

    public function mount()
    {
        // todo: init $this->staff
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
