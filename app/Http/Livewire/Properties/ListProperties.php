<?php

namespace App\Http\Livewire\Properties;

use App\Models\Property;
use Livewire\Component;

class ListProperties extends Component
{
    public function render()
    {
        return view('livewire.properties.list', [
            'properties' => Property::paginate()
        ]);
    }
}
