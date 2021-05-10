<?php

namespace App\Http\Livewire\Units;

use App\Models\Unit;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Show extends Component
{
    public Unit $unit;

    public function render(): View
    {
        return view('livewire.units.show');
    }
}
