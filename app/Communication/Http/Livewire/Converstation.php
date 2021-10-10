<?php

namespace App\Communication\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Converstation extends Component
{
    public $messages;
    public $user;

    public function mount(User $user)
    {
        $this->messages = $user->messages;
        $this->user = $user;
    }

    public function render(): View
    {
        return view('livewire.manage.communication.conversation')
            ->layout('layouts.base', ['title' => "$this->user->name | Conversation"])
            ->with('messages', $this->messages)
            ->with('user', $this->user);
    }
}
