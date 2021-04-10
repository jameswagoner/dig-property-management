<?php

namespace App\Actions\Twilio;

use Twilio\TwiML\VoiceResponse;

class RecordMaintenanceReqestAction
{
    public function __invoke(): VoiceResponse
    {
        $voiceResponse = new VoiceResponse;

        $voiceResponse->say('Please record a message after the beep with your name and issue and maintenance will reach out as soon as possible.');
        $voiceResponse->record([
            'recordingStatusCallbackEvent' => 'completed',
            'recordingStatusCallbackUrl' => route('webhooks.twilio.voice.recording-status'),
            'transcribe' => 'true',
            'transcribeCallback' => route('webhooks.twilio.voice.transcription'),
        ]);

        return $voiceResponse;
    }
}
