<?php

namespace App\Http\Livewire\Money\Payments;

use App\Models\Payment;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('livewire.money.payments.index', [
            'payments' => Payment::paginate(10)
        ]);
    }
}
