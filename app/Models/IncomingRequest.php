<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class IncomingRequest extends Model
{
    protected $guarded = [];

    protected $casts = [
        'payload' => 'object'
    ];

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(User::class, 'number', 'number');
    }

    public static function getTypeFromRequest(Request $request): string
    {
        return [
            1 => 'maintenance',
            2 => 'other'
        ][$request->input('Digits')];
    }
}
