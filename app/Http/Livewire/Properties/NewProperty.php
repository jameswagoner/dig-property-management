<?php

namespace App\Http\Livewire\Properties;

use App\Models\Property;
use Livewire\Component;

class NewProperty extends Component
{
    public $nickname;
    public $rent_amount;
    public $street_address;
    public $city;
    public $state;
    public $postal_code;

    public $rules = [
        'nickname' => 'required',
        'rent_amount' => 'required|numeric',
        'street_address' => 'required',
        'city' => 'required',
        'state' => 'required',
        'postal_code' => 'required|numeric'
    ];

    public function createProperty()
    {
        $saved = Property::create($this->validate());

        if ($saved) {
            $this->dispatchBrowserEvent('toast', 'Property was saved!');
            $this->redirectRoute('properties.list');
        }
    }

    public function render()
    {
        return view('livewire.properties.new-property');
    }
}
