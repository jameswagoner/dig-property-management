<?php

namespace App\Communication\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Inbox extends Component
{
    public function render(): View
    {
        return view('livewire.manage.communication.inbox')
            ->layout('layouts.app', ['title' => 'Communication']);
    }
}
