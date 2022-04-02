<?php

namespace App\Units\Models;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kodeine\Metable\Metable;

class Unit extends Model
{
    use Metable;

    protected $guarded = [];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getRentalAmountFormattedAttribute(): string
    {
        return number_format($this->getMeta('rental_amount') / 100, 2);
    }

    public function getUtilityAmountFormattedAttribute(): string
    {
        return number_format($this->getMeta('utility_amount') / 100, 2);
    }

    public function getPetAmountFormattedAttribute(): string
    {
        return number_format($this->getMeta('pet_amount') / 100, 2);
    }
}
