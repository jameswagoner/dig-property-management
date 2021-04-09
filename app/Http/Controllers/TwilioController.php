<?php

namespace App\Http\Controllers;

use App\Actions\Twilio\AnswerVoiceAction;
use Illuminate\Http\Request;
use Twilio\TwiML\VoiceResponse;

class TwilioController extends Controller
{
    public function voice(
        Request $request,
        AnswerVoiceAction $answerVoiceAction
    ): VoiceResponse
    {
        return $answerVoiceAction;
    }
}
