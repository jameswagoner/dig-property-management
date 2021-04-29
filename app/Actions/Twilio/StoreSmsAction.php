<?php

namespace App\Actions\Twilio;

use App\Models\IncomingRequest;
use Illuminate\Http\Request;

class StoreSmsAction
{
    public function __invoke(Request $request): void
    {
        IncomingRequest::create([
            'sid'      => $request->input('SmsSid'),
            'number'   => $request->input('From'),
            'type'     => 'sms',
            'text'     => $request->input('Body'),
            'payload'  => $request->all(),
        ]);
    }
}
