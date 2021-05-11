<?php

namespace App\Http\Livewire\Tenants;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class Index extends Component
{
    public function render(): View
    {
        return view('livewire.tenants.index', [
            'users' => User::role('tenant')->get()
        ]);
    }
}
