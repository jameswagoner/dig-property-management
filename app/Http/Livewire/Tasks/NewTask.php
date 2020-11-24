<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class NewTask extends Component
{
    public $open = false;
    public $title;
    public $description;
    public $unit;
    public $priority = 'normal';

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'unit' => 'required',
        'priority' => 'required'
    ];

    public function createTask()
    {
        $data = $this->validate($this->rules);

        $saved = Task::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'unit' => $data['unit'],
            'priority' => $data['priority']
        ]);

        if ($saved) $this->open = false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.tasks.new-task');
    }
}