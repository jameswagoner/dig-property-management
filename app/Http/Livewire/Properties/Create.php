<?php

namespace App\Http\Livewire\Properties;

use App\Models\Property;
use Livewire\Component;

class Create extends Component
{
    public bool $showModal = false;

    public Property $property;

    protected array $rules = [
        'property.nickname' => 'required',
        'property.rent_amount' => 'required',
        'property.street_address' => 'required',
        'property.city' => 'required',
        'property.state' => 'required',
        'property.postal_code' => 'required'
    ];

    public function open()
    {
        $this->showModal = true;
    }

    public function save()
    {
        $this->validate();

        $this->property->save();

        $this->emitUp('saved');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.properties.create');
    }
}
