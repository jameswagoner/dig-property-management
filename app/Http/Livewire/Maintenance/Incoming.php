<?php

namespace App\Http\Livewire\Maintenance;

use App\Models\IncomingRequest;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Incoming extends Component
{
    public function getRequestsProperty()
    {
        return IncomingRequest::where('type', 'maintenance')->get();
    }

    public function render(): View
    {
        return view('livewire.maintenance.incoming');
    }
}
