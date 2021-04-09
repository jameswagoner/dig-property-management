<?php

namespace App\Http\Controllers;

use App\Actions\Twilio\AnswerVoiceAction;

class TwilioController extends Controller
{
    public function voice(AnswerVoiceAction $answerVoiceAction): string
    {
        return $answerVoiceAction()->asXML();
    }
}
