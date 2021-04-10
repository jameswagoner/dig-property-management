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

    public function recordStatus(Request $request): Response
    {
        IncomingRequest::firstOrCreate([
            'call_sid' => $request->input('sid')
        ], [
            'recording_url' => $request->input('uri')
        ]);

        return response();
    }

    public function transcription(Request $request): Response
    {
        IncomingRequest::firstOrCreate([
            'call_sid' => $request->input('sid')
        ], [
            'text' => $request->input('transcription_text')
        ]);

        return response();
    }
}
