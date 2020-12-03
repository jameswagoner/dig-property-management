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
    public $properties;
    public $property;

    public function mount()
    {
        $this->clear();
    }

    public function clear()
    {
        $this->open = false;
        $this->query = null;
        $this->property = null;
        $this->properties = collect();

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

        $this->open = false;
        $this->properties = collect();

        $this->emitUp('propertySelected', $property->id);
    }

    public function render()
    {
        return view('livewire.properties.search-properties');
    }
}
