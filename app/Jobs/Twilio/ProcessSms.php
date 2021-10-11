<?php

namespace App\Jobs\Twilio;

use App\Actions\NotifyManagementAction;
use App\Actions\Twilio\StoreSmsAction;
use App\DataTransferObjects\MessageData;
use App\Models\Message;
use App\Models\User;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Twilio\Rest\Client;

class ProcessSms implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle(
        Request $request,
        StoreSmsAction $storeSmsAction,
        NotifyManagementAction $notifyManagementAction,
        Client $client
    )
    {
        $user = User::where('number', $request->input('From'))->first();

        try {
            $messageData = new MessageData([
                'user_id'   => optional($user)->id,
                'number'    => $request->input('From'),
                'type'      => 'sms',
                'direction' => Message::INBOUND,
                'body'      => $request->input('Body'),
            ]);

            $storeSmsAction($messageData);

            $notifyManagementAction($client, "New inbound text message was recieved", ['+13608314766']);
        } catch (Exception $exception) {
            // do nothing
        }
    }
}
