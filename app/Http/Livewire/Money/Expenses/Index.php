<?php

namespace App\Http\Livewire\Money\Expenses;

use App\Models\Expense;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function getExpensesProperty(): LengthAwarePaginator
    {
        return Expense::paginate();
    }

    public function render(): View
    {
        return view('livewire.money.expenses.index');
    }
}
