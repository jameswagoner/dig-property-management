<?php

namespace App\Http\Controllers\Webhooks\Twilio;

use App\Actions\NotifyManagementAction;
use App\Actions\Twilio\StoreSmsAction;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Twilio\Rest\Client;

class SmsController extends Controller
{
    public function incoming(
        Request $request,
        StoreSmsAction $storeSmsAction,
        Client $client
    ): Response
    {
        $storeSmsAction($request, Message::INBOUND);

        (new NotifyManagementAction)($client, "New inbound text message was recieved", ['+13608314766']);

        return response('200 OK');
    }
}
