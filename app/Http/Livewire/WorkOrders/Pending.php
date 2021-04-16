<?php

namespace App\Http\Livewire\WorkOrders;

use App\Models\IncomingRequest;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Pending extends Component
{
    use WithPagination;

    public function render(): View
    {
        $incomingRequests = IncomingRequest::where('type', 'maintenance')
            ->orderByDesc('created_at')
            ->paginate();

        return view('livewire.work-orders.pending', compact('incomingRequests'));
    }
}
