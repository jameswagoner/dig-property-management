<?php

namespace App\Http\Controllers\Webhooks\Twilio;

use App\Http\Controllers\Controller;
use App\Jobs\Twilio\ProcessSms;
use Twilio\TwiML\MessagingResponse;

class SmsController extends Controller
{
    public function incoming(MessagingResponse $response): string
    {
        ProcessSms::dispatch();

        return $response->asXML();
    }
}
