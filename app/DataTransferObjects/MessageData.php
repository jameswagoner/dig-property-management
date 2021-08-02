<?php

namespace App\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class MessageData extends DataTransferObject
{
    public int $user_id;
    public string $number;
    public string $type;
    public string $direction;
    public string $body;
}
