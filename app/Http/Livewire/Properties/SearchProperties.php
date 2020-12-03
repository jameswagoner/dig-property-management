<?php

namespace App\Http\Livewire\Properties;

use App\Models\Property;
use Livewire\Component;

class SearchProperties extends Component
{
    public $open = false;
    public $class;
    public $label;
    public $query;
    public $properties = [];
    public $property;

    public function cancel()
    {
        $this->reset('open', 'query', 'properties', 'property');

        $this->emitUp('propertySelected', null);
    }

    public function updatedQuery()
    {
        $this->open = true;

        $this->properties = Property::search($this->query)->get();
    }

    public function selectProperty(Property $property)
    {
        $this->property = $property;
        $this->query = $property->nickname;

        $this->reset('open', 'properties');

        $this->emitUp('propertySelected', $property->id);
    }

    public function render()
    {
        return view('livewire.properties.search-properties');
    }
}
