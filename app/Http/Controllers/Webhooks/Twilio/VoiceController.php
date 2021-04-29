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
        if ($request->input('Digits') === 'hangup') {
            return response('200 OK');
        }

        $storeVoiceAction($request);

        return [
            1        => $recordMaintenanceReqestAction()->asXML(),
            2        => $recordOtherReqestAction()->asXML(),
        ][$request->input('Digits')];
    }

    public function recordingStatus(
        Request $request,
        Client $client,
        NotifyManagementAction $notifyManagementAction
    )
    {
        $incomingRequest = IncomingRequest::where('call_sid', $request->input('CallSid'))->firstOrFail();
        $incomingRequest->recording_url = $request->input('RecordingUrl');
        $incomingRequest->saveQuietly();

        $notifyManagementAction($client, 'New tenant request', ['+13608314766']);

        return response('200 OK');
    }
}
