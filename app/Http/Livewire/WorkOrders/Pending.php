<?php

namespace App\Http\Livewire\WorkOrders;

use App\Models\Message;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Pending extends Component
{
    use WithPagination;

    public function render(): View
    {
        $incomingRequests = Message::orderByDesc('created_at')
                                   ->paginate();

        return view('livewire.work-orders.pending', compact('incomingRequests'));
    }
}
