<?php

namespace App\Http\Controllers\Webhooks\Twilio;

use App\Actions\Twilio\StoreSmsAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SmsController extends Controller
{
    public function incoming(
        Request $request,
        StoreSmsAction $storeSmsAction
    ): Response
    {
        $storeSmsAction($request);

        return response('200 OK');
    }
}
