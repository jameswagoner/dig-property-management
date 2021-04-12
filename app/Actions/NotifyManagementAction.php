<?php

namespace App\Actions;

use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class NotifyManagementAction
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
                // bummer
            }
        }
    }
}
