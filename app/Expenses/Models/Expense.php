<?php

namespace App\Expenses\Models;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    public $guarded = [];

    public $dates = [
        'expensed_at'
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
