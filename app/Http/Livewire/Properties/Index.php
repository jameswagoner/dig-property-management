<?php

namespace App\Http\Livewire\Properties;

use App\Models\Property;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $listeners = [
        'saved'
    ];

    public function saved()
    {
        $this->render();
    }

    public function render()
    {
        return view('livewire.properties.index', [
            'properties' => Property::paginate(10)
        ]);
    }
}
