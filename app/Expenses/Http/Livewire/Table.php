<?php

namespace App\Expenses\Http\Livewire;

use App\Models\Transaction;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('livewire.manage.expenses.table')
            ->layoutData(['title' => 'Expenses'])
            ->with('expenses', Transaction::expense()->latest('transacted_at')->paginate());
    }
}
