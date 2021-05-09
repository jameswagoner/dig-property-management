<?php

namespace App\Http\Livewire\Manage\Tenants;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Communication extends Component
{
    public function render(): View
    {
        return view('livewire.manage.tenants.communication');
    }
}
