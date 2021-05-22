<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;

class Payment extends Model
{
    protected $guarded = [];

    const COMPLETED = "Completed";

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeCompleted(Builder $builder): Builder
    {
        return $builder->where('status', self::COMPLETED);
    }
}
