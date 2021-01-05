<?php

namespace App\Http\Livewire\Properties;

use App\Models\Property;
use Livewire\Component;

class Show extends Component
{
    public Property $property;

    public function render()
    {
        return view('livewire.properties.show');
    }
}
