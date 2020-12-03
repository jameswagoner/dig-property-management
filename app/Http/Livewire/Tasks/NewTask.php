<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class NewTask extends Component
{
    public $open = false;
    public $title;
    public $description;
    public $property_id;
    public $priority = 'normal';

    protected $listeners = ['propertySelected'];

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'property_id' => 'required|numeric|exists:App\Models\Property,id',
        'priority' => 'required'
    ];

    public function cancel()
    {
        $this->reset('open', 'title', 'description', 'property_id', 'priority');

        $this->resetValidation();
    }

    public function propertySelected($id)
    {
        $this->property_id = $id;
    }

    public function createTask()
    {
        $data = $this->validate($this->rules);

        $saved = Task::create($this->validate());

        if ($saved) {
            $this->open = false;
            $this->emit('task-saved');
            $this->dispatchBrowserEvent('toast', 'Task was saved!');
        }
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