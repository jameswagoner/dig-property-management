<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class WorkOrder extends Model
{
    protected $guarded = [];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function getTitleAttribute(): string
    {
        return Str::title($this->attributes['title']);
    }

    public function getPriorityAttribute(): string
    {
        return ucwords(str_replace('-', ' ', $this->attributes['priority']));
    }

    public function getStatusAttribute(): string
    {
        return ucwords(str_replace('-', ' ', $this->attributes['status']));
    }

    public function getStatusColorAttribute(): string
    {
        return [
            'new' => 'blue',
            'in-progress' => 'yellow',
            'completed' => 'green'
        ][$this->attributes['status']];
    }
}
