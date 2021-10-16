<?php

namespace App\Expenses\Http\Livewire;

use App\Expenses\Models\Expense;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('livewire.manage.expenses.table')
            ->layout('layouts.app', ['title' => 'Expenses'])
            ->with('expenses', Expense::paginate());
    }
}
