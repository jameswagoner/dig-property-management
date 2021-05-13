<?php

namespace App\Http\Livewire\Tenants;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Show extends Component
{
    public User $tenant;

    public function render(): View
    {
        return view('livewire.tenants.show');
    }
}
