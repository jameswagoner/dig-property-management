<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class ListTasks extends Component
{
    use WithPagination;

    public $listeners = [
        'task-saved' => 'render'
    ];

    public function render()
    {
        return view('livewire.tasks.list', [
            'tasks' => Task::orderByDesc('created_at')->paginate(5)
        ]);
    }


}
