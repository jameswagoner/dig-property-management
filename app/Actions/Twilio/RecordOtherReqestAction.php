<?php

namespace App\Actions\Twilio;

use Twilio\TwiML\VoiceResponse;

class RecordOtherReqestAction
{
    public function __invoke(): VoiceResponse
    {
        $voiceResponse = new VoiceResponse;

        $voiceResponse->say('Please leave a message after the beep with your name and inquiry and we will reach out as soon as possible. When you are finshed, just hang up.');
        $voiceResponse->record([
            'recordingStatusCallbackEvent' => 'completed',
            'recordingStatusCallback' => route('webhooks.twilio.voice.recording-status'),
        ]);

        return $voiceResponse;
    }
}
