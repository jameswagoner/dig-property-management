<?php

namespace App\Expenses\Models;

use App\Units\Models\Unit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    public $guarded = [];

    public $dates = [
        'expensed_at'
    ];

    const OFFICE = 'Office';
    const PROPERTY = 'Property';
    const CONSTRUCTION = 'Construction';

    public static array $directions = [
        self::OFFICE,
        self::PROPERTY,
        self::CONSTRUCTION,
    ];

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function getFormattedAmountAttribute(): string
    {
        return number_format($this->attributes['amount'] / 100, 2);
    }
}
