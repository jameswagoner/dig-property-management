<?php

namespace App\Http\Livewire\Money\Payments;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function getRowsProperty(): LengthAwarePaginator
    {
        return Payment::paginate();
    }

    public function render(): View
    {
        return view('livewire.money.payments.index', [
            'payments' => $this->rows,
        ]);
    }
}
