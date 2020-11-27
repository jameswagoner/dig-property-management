<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class ListTasks extends Component
{
    public $listeners = [
        'task-saved' => 'render'
    ];

    public function render()
    {
        return view('livewire.tasks.list', [
            'tasks' => Task::orderByDesc('created_at')->get()
        ]);
    }


}
