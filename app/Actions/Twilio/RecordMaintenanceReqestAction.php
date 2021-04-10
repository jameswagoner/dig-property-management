<?php

namespace App\Actions\Twilio;

use Twilio\TwiML\VoiceResponse;

class RecordMaintenanceReqestAction
{
    public function __invoke(): VoiceResponse
    {
        $voiceResponse = new VoiceResponse;

        $voiceResponse->say('Please leave a message after the beep with your name and issue and maintenance will reach out as soon as possible. When you are finished, just hang up.');
        $voiceResponse->record([
            'recordingStatusCallbackEvent' => 'completed',
            'recordingStatusCallback' => route('webhooks.twilio.voice.recording-status'),
            'transcribe' => 'true',
            'transcribeCallback' => route('webhooks.twilio.voice.transcription'),
        ]);

        return $voiceResponse;
    }
}
