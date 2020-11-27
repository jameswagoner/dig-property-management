<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class ListTasks extends Component
{
    public function render()
    {
        return view('livewire.tasks.list', [
            'tasks' => Task::all()
        ]);
    }
}
