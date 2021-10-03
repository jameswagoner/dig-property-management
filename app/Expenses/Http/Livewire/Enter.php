<?php

namespace App\Expenses\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Enter extends Component
{
    public $amount;
    public $category;
    public $date;
    public $description;
    public $unit_id;

    public $rules = [
        'amount' => 'required|numeric',
        'category' => 'required',
        'date' => 'required|date_format:m-d-Y',
        'description' => 'required',
        'unit_id' => 'sometimes|nullable'
    ];

    public function saveAndNew(): void
    {
        $this->save(true);
    }

    public function save($new = false): void
    {
        $this->validate();



        if ($new) {
            $this->redirectRoute('money.expenses.enter');
        } else {
            $this->redirectRoute('money.expenses.index');
        }
    }

    public function render(): View
    {
        return view('livewire.manage.expenses.enter');
    }
}
