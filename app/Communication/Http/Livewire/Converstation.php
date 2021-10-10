<?php

namespace App\Communication\Http\Livewire;

use App\Actions\Twilio\SendSmsAction;
use App\DataTransferObjects\MessageData;
use App\Models\Message;
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Converstation extends Component
{
    public $messages;
    public $message;
    public $user;

    public function mount(User $user)
    {
        $this->messages = $user->messages;
        $this->user = $user;
    }

    public function sendMessage(SendSmsAction $sendSmsAction)
    {
        try {
            $messageData = new MessageData([
                'user_id'   => $this->user->id,
                'number'    => $this->user->number,
                'type'      => 'sms',
                'direction' => Message::OUTBOUND,
                'body'      => $this->message,
            ]);


        } catch (Exception $e) {

        }
    }

    public function render(): View
    {
        return view('livewire.manage.communication.conversation')
            ->layout('layouts.base', ['title' => "{$this->user->name} | Conversation"])
            ->with('messages', $this->messages)
            ->with('user', $this->user);
    }
}
