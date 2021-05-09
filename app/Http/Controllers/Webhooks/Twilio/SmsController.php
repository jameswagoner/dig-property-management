<?php

namespace App\Http\Controllers\Webhooks\Twilio;

use App\Actions\Twilio\StoreSmsAction;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SmsController extends Controller
{
    public function incoming(
        Request $request,
        StoreSmsAction $storeSmsAction
    ): Response
    {
        $storeSmsAction($request, Message::INBOUND);

        return response('200 OK');
    }
}
