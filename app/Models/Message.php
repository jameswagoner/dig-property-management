<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class Message extends Model
{
    protected $guarded = [];

    protected $casts = [
        'payload' => 'object'
    ];

    const OUTBOUND = 'outbound';
    const INBOUND = 'inbound';
    const AUTOMATION = 'automation';

    public static array $directions = [
        self::OUTBOUND,
        self::INBOUND,
        self::AUTOMATION,
    ];

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(User::class, 'number', 'number');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'marked_read_by');
    }

    public static function getTypeFromRequest(Request $request): string
    {
        return [
            1 => 'maintenance',
            2 => 'other'
        ][$request->input('Digits')];
    }
}
