<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;

class Payment extends Model
{
    protected $guarded = [];

    const COMPLETED = "Completed";
    const IPN_FAILURE = "FALIURE";
    const IPN_INVALID = "INVALID";
    const IPN_VERIFIED = "VERIFIED";

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeCompleted(Builder $builder): Builder
    {
        return $builder->where('status', self::COMPLETED);
    }
}
