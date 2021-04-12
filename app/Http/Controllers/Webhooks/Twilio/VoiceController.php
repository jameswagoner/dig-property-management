<?php

namespace App\Http\Controllers\Webhooks\Twilio;

use App\Actions\NotifyManagementAction;
use App\Actions\Twilio\AnswerVoiceAction;
use App\Actions\Twilio\RecordMaintenanceReqestAction;
use App\Actions\Twilio\RecordOtherReqestAction;
use App\Actions\Twilio\StoreVoiceAction;
use App\Http\Controllers\Controller;
use App\Models\IncomingRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;
use Twilio\Rest\Client;

class VoiceController extends Controller
{
    public function answer(AnswerVoiceAction $answerVoiceAction): string
    {
        return $answerVoiceAction()->asXML();
    }

    public function record(
        Request $request,
        StoreVoiceAction $storeVoiceAction,
        RecordMaintenanceReqestAction $recordMaintenanceReqestAction,
        RecordOtherReqestAction $recordOtherReqestAction
    )
    {
        $storeVoiceAction($request);

        return [
            1        => $recordMaintenanceReqestAction()->asXML(),
            2        => $recordOtherReqestAction()->asXML(),
            'hangup' => response('200 OK')
        ][$request->input('Digits')];
    }

    public function recordingStatus(
        Request $request,
        Client $client,
        NotifyManagementAction $notifyManagementAction
    )
    {
        IncomingRequest::firstOrCreate([
            'call_sid' => $request->input('CallSid')
        ], [
            'number' => $request->input('From'),
            'recording_url' => $request->input('RecordingUrl'),
        ]);

        $notifyManagementAction($client, 'New tenant request', ['+13608314766']);

        return response('200 OK');
    }
}
