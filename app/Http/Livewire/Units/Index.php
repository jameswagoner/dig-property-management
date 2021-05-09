<?php

namespace App\Http\Livewire\Units;

use App\Models\Unit;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $listeners = [
        'saved' => 'render'
    ];

    public function render(): View
    {
        return view('livewire.units.index', [
            'units' => Unit::paginate(10)
        ]);
    }
}
