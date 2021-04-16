<?php

namespace App\Http\Livewire\WorkOrders;

use App\Models\WorkOrder;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('livewire.work-orders.index', [
            'workOrders' => WorkOrder::orderByDesc('created_at')->paginate()
        ]);
    }
}
