<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class IncomingRequest extends Model
{
    protected $guarded = [];

    protected $casts = [
        'payload' => 'object'
    ];

    public static function getTypeFromRequest(Request $request): string
    {
        return [
            1 => 'maintenance',
            2 => 'other'
        ][$request->input('Digits')];
    }
}
