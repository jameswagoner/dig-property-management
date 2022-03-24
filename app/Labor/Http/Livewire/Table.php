<?php

namespace App\Labor\Http\Livewire;

use App\Models\Transaction;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('livewire.manage.labor.table')
            ->layoutData(['title' => 'Labor Expenses'])
            ->with('laborExpenses', Transaction::labor()->paginate());
    }
}
