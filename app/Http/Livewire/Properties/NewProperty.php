<?php

namespace App\Http\Livewire\Properties;

use App\Models\Property;
use Livewire\Component;

class NewProperty extends Component
{
    public $nickname;

    public $rules = [
        'nickname' => 'required'
    ];

    public function createProperty()
    {
        $saved = Property::create($this->validate());

        if ($saved) {
            $this->show = false;
            $this->emit('property-saved');
            $this->dispatchBrowserEvent('toast', 'Property was saved!');
        }
    }

    public function render()
    {
        return view('livewire.properties.new-property');
    }
}
