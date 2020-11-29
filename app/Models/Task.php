<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function getTitleAttribute()
    {
        return Str::title($this->attributes['title']);
    }

    public function getPriorityAttribute()
    {
        return ucwords(str_replace('-', ' ', $this->attributes['priority']));
    }

    public function getStatusAttribute()
    {
        return ucwords(str_replace('-', ' ', $this->attributes['status']));
    }

    public function getStatusColorAttribute()
    {
        return [
            'new' => 'blue',
            'in-progress' => 'yellow',
            'completed' => 'green'
        ][$this->attributes['status']];
    }
}