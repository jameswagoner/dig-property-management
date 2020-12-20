<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Property extends Model
{
    use HasFactory;
    use Searchable;

    protected $guarded = [];

    protected $appends = [
        'full_address'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function getFullAddressAttribute()
    {
        return $this->attributes['street_address'] . ' ' . $this->attributes['city'] . ', ' . $this->attributes['state'] . ' ' . $this->attributes['postal_code'];
    }

    public function toSearchableArray()
    {
        return $this->toArray();
    }
}