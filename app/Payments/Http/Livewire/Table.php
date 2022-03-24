<?php

namespace App\Payments\Http\Livewire;

use App\Models\Transaction;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('livewire.manage.payments.table')
            ->layoutData(['title' => 'Rent Payments'])
            ->with('payments', Transaction::rent()->latest('transacted_at')->paginate());
    }
}
