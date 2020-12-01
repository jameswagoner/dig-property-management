<?php

namespace App\Http\Livewire\Properties;

use App\Models\Property;
use Livewire\Component;

class SearchProperties extends Component
{
    public $class = '';

    public $label = '';

    public $search;

    public $queryString = ['search'];

    public function render()
    {
        return view('livewire.properties.search-properties', [
            'properties' => Property::search($this->search)->get()
        ]);
    }
}
