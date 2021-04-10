<?php

namespace App\Http\Livewire\Manage\Staff;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class Index extends Component
{
    public function render(): View
    {
        return view('livewire.staff.index', [
            'users' => User::all()
        ]);
    }
}