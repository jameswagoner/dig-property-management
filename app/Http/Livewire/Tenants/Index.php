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
            'tenants' => User::role('tenant')->get()
        ]);
    }
}
