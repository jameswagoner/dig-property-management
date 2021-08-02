<?php

namespace App\Actions\Twilio;

use App\DataTransferObjects\MessageData;
use App\Models\Message;

class StoreSmsAction
{
    public function __invoke(MessageData $data): void
    {
        Message::create($data->toArray());
    }
}
