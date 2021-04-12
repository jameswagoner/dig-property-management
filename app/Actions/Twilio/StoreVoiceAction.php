<?php

namespace App\Actions\Twilio;

use App\Models\IncomingRequest;
use Illuminate\Http\Request;

class StoreVoiceAction
{
    public function __invoke(Request $request): void
    {
        IncomingRequest::create([
            'call_sid' => $request->input('CallSid'),
            'number'   => $request->input('From'),
            'type'     => IncomingRequest::getTypeFromRequest($request),
            'payload'  => $request->all(),
        ]);
    }
}
