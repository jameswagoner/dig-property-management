<?php

namespace App\Expenses\Http\Livewire;

use App\Expenses\Actions\AddExpenseAction;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Exists;
use Livewire\Component;

class Enter extends Component
{
    public $amount;
    public $business_name;
    public $category;
    public $expensed_at;
    public $unit_id;

    public function rules(): array
    {
        return [
            'amount'        => ['required', 'numeric'],
            'business_name' => ['required'],
            'category'      => ['required'],
            'expensed_at'   => ['required', 'date_format:Y-m-d'],
            'unit_id'       => ['sometimes', 'nullable', Rule::exists('units')],
        ];
    }

    public function saveAndNew(AddExpenseAction $addExpenseAction): void
    {
        $this->save($addExpenseAction, true);
    }

    public function save(AddExpenseAction $addExpenseAction, $new = false): void
    {
        $data = $this->validate();

        Arr::set($data, 'expensed_at', Carbon::parse($this->expensed_at));

        $addExpenseAction($data);

        if ($new) {
            $this->redirectRoute('manage.expenses.enter');
        } else {
            $this->redirectRoute('manage.expenses.index');
        }
    }

    public function render(): View
    {
        return view('livewire.manage.expenses.enter')
            ->layoutData(['title' => 'New Expense']);
    }
}
