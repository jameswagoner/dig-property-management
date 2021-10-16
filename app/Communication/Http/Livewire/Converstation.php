<?php

namespace App\Communication\Http\Livewire;

use App\Communication\Jobs\ProcessOutboundSms;
use App\DataTransferObjects\MessageData;
use App\Models\Message;
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Converstation extends Component
{
    public string $message = '';
    public $messages;
    public User $user;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->messages = $this->user->messages;
    }

    public function send()
    {
        try {
            $messageData = new MessageData([
                'user_id'   => $this->user->id,
                'number'    => $this->user->number,
                'type'      => 'sms',
                'direction' => Message::OUTBOUND,
                'body'      => $this->message,
            ]);

            ProcessOutboundSms::dispatch($messageData);

            $this->messages = $this->user->messages()->get();

            $this->reset('message');
        } catch (Exception $e) {

        }
    }

    public function render(): View
    {
        return view('livewire.manage.communication.conversation')
            ->layout('layouts.app', ['title' => "{$this->user->name} | Conversation"]);
    }
}
