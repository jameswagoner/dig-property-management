<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class Form extends Component
{
    public $title;

    protected $rules = [
        'title' => 'required'
    ];

    public function render()
    {
        return view('livewire.tasks.form');
    }

    public function createTask()
    {
        $this->validate();

        $item = new Task();
        $item->title = $this->title;
        $item->save();

        $this->emit('saved');
    }
}
