<?php

namespace App\Http\Livewire\Properties;

use App\Models\Property;
use Livewire\Component;
use Livewire\WithPagination;

class ListProperties extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.properties.list', [
            'properties' => Property::paginate(5)
        ]);
    }
}
