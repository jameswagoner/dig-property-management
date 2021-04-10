<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncomingRequest extends Model
{
    protected $guarded = [];

    protected $casts = [
        'payload' => 'object'
    ];
}
