<?php

namespace App\Actions\Twilio;

use App\Actions\NotifyManagementAction;
use App\Models\Message;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class SendSmsAction
{
    /**
     * @throws TwilioException
     */
    public function __invoke(Client $client, Message $message): void
    {
        $sms = $client->messages
            ->create($message->number, [
                'from' => config('twilio.number'),
                'body' => $message->body
            ]);

        $message->sid = $sms->sid;
        $message->save();
    }
}
