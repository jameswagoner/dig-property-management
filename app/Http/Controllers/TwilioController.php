<?php

namespace App\Http\Controllers;

use App\Actions\Twilio\AnswerVoiceAction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TwilioController extends Controller
{
    public function voice(
        Request $request,
        AnswerVoiceAction $answerVoiceAction
    ): string
    {
        return $answerVoiceAction()->asXML();
    }
}
