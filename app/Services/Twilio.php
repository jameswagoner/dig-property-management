<?php

namespace App\Services;

use Twilio\Rest\Client;
use Twilio\Rest\Messaging;
use Twilio\Rest\Voice;

class Twilio
{
    protected Client $client;

    /**
     * Twilio constructor.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function sms(): Messaging
    {
        return $this->client->messaging;
    }

    public function voice(): Voice
    {
        return $this->client->voice;
    }
}
