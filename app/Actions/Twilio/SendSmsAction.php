<?php

namespace App\Actions\Twilio;

use App\Actions\NotifyManagementAction;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class SendSmsAction
{
    public function __invoke(Client $client, string $message, array $numbers): void
    {
        foreach ($numbers as $number) {
            try {
                $client->messages
                    ->create($number, [
                        'from' => config('twilio.number'),
                        'body' => $message
                    ]);
            } catch (TwilioException $e) {
                (new NotifyManagementAction)($client, "$number message delivery failed", ['+13608314766']);
            }
        }
    }
}
