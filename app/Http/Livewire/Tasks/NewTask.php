<?php

namespace App\Http\Livewire\Tasks;

use Livewire\Component;

class NewTask extends Component
{
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