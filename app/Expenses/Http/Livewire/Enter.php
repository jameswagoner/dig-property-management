<?php

namespace App\Expenses\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Enter extends Component
{
    public $date;

    public $amount;

    public function save($continue = false): void
    {
        if ($continue) {
            $this->reset();
        } else {
            $this->redirectRoute('money.expenses.index');
        }
    }

    public function render(): View
    {
        return view('livewire.manage.expenses.enter');
    }
}
