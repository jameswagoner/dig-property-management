<?php

namespace App\Actions\Twilio;

use App\Models\Message;
use Illuminate\Http\Request;

class StoreSmsAction
{
    public function __invoke(Request $request, string $direction = 'automation'): void
    {
        Message::create([
            'sid'       => $request->input('SmsSid'),
            'number'    => $request->input('From'),
            'type'      => 'sms',
            'direction' => $direction,
            'text'      => $request->input('Body'),
            'payload'   => $request->all(),
        ]);
    }
}
