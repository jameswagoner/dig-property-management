<?php

namespace App\Actions\Twilio;

use Twilio\TwiML\VoiceResponse;

class AnswerVoiceAction
{
    public function __invoke(): VoiceResponse
    {
        $voiceResponse = new VoiceResponse;
        $voiceResponse->say('Hello! You have reached the D I G tenant hotline.');
        $voiceResponse->pause();

        $gather = $voiceResponse->gather([
            'input' => 'speech dtmf',
            'timeout' => 3,
            'numDigits' => 1,
        ]);
        $gather->say('Please press 1 or say maintenance for maintenance.');
        $gather->say('Press 2 or say rent for rent payment.');
        $gather->say('Press 3 or say drunk for drunk dialing this number.');

        return $voiceResponse;
    }
}
