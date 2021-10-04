<?php

namespace App\Expenses\Http\Livewire;

use App\Expenses\Actions\AddExpenseAction;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Livewire\Component;

class Enter extends Component
{
    public $amount;
    public $business_name;
    public $category;
    public $date;
    public $unit_id;

    public $rules = [
        'amount' => 'required|numeric',
        'business_name' => 'required',
        'category' => 'required',
        'date' => 'required|date_format:m-d-Y',
        'unit_id' => 'sometimes|nullable'
    ];

    public function saveAndNew(AddExpenseAction $addExpenseAction): void
    {
        $this->save($addExpenseAction, true);
    }

    public function save(AddExpenseAction $addExpenseAction, $new = false): void
    {
        $data = $this->validate();

        Arr::set($data, 'expensed_at', Carbon::parse($this->date));

        $addExpenseAction($data);

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
