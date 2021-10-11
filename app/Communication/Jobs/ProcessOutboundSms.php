<?php

namespace App\Communication\Jobs;

use App\Actions\Twilio\SendSmsAction;
use App\DataTransferObjects\MessageData;
use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Twilio\Rest\Client;

class ProcessOutboundSms implements ShouldQueue
{
    use Dispatchable,
        InteractsWithQueue,
        Queueable,
        SerializesModels;

    public MessageData $messageData;

    public function __construct(MessageData $messageData)
    {
        $this->messageData = $messageData;
    }

    /**
     * @throws \Twilio\Exceptions\TwilioException
     */
    public function handle(Client $client, SendSmsAction $sendSmsAction)
    {
        $message = Message::create($this->messageData->toArray());

        $sendSmsAction($client, $message);
    }
}
