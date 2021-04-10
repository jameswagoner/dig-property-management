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
            'action' => route('webhooks.twilio.voice.record'),
            'input' => 'dtmf',
            'timeout' => 3,
            'numDigits' => 1,
        ]);
        $gather->say(
            'Please press 1 for maintenance. ' .
            'Press 2 for all other inquiries.'
        );

        $voiceResponse->redirect(route('webhooks.twilio.voice.record'));

        return $voiceResponse;
    }
}
