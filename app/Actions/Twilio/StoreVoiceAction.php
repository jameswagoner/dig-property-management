<?php

namespace App\Actions\Twilio;

use App\Models\Message;
use Illuminate\Http\Request;

class StoreVoiceAction
{
    public function __invoke(Request $request, string $direction = 'automation'): void
    {
        Message::create([
            'sid'      => $request->input('CallSid'),
            'number'   => $request->input('From'),
            'type'     => Message::getTypeFromRequest($request),
            'direction' => $direction,
            'payload'  => $request->all(),
        ]);
    }
}
