<?php

namespace App\Http\Controllers\Webhooks\Twilio;

use App\Actions\Twilio\AnswerVoiceAction;
use App\Actions\Twilio\RecordMaintenanceReqestAction;
use App\Actions\Twilio\RecordOtherReqestAction;
use App\Http\Controllers\Controller;
use App\Models\IncomingRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VoiceController extends Controller
{
    public function answer(AnswerVoiceAction $answerVoiceAction): string
    {
        return $answerVoiceAction()->asXML();
    }

    public function record(
        Request $request,
        RecordMaintenanceReqestAction $recordMaintenanceReqestAction,
        RecordOtherReqestAction $recordOtherReqestAction
    ): string
    {
        return [
            1 => $recordMaintenanceReqestAction()->asXML(),
            2 => $recordOtherReqestAction()->asXML(),
        ][$request->input('Digits')];
    }

    public function recordingStatus(Request $request): Response
    {
        IncomingRequest::firstOrCreate([
            'call_sid' => $request->input('CallSid')
        ], [
            'number' => $request->input('From'),
            'recording_url' => $request->input('RecordingUrl'),
        ]);

        return response();
    }

    public function transcription(Request $request): Response
    {
        IncomingRequest::firstOrCreate([
            'call_sid' => $request->input('CallSid')
        ], [
            'number' => $request->input('From'),
            'text' => $request->input('TranscriptionText'),
        ]);

        return response();
    }
}
