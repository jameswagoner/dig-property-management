<?php

namespace App\Models;

use App\Units\Models\Unit;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    public $guarded = [];

    public $dates = [
        'transacted_at'
    ];

    const TYPE_LABOR = 'Labor';
    const TYPE_EXPENSE = 'Expense';
    const TYPE_RENT = 'Rent Payment';

    public static array $types = [
        self::TYPE_EXPENSE,
        self::TYPE_LABOR,
        self::TYPE_RENT,
    ];

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function setAmountAttribute($value): void
    {
        $this->attributes['amount'] = $value * 100;
    }

    public function getFormattedAmountAttribute(): string
    {
        return number_format($this->attributes['amount'] / 100, 2);
    }

    public function scopeExpense(Builder $query): Builder
    {
        return $query->where('type', self::TYPE_EXPENSE);
    }

    public function scopeLabor(Builder $query): Builder
    {
        return $query->where('type', self::TYPE_LABOR);
    }

    public function scopeRent(Builder $query): Builder
    {
        return $query->where('type', self::TYPE_RENT);
    }
}
