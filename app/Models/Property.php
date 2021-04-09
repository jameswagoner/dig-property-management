<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = [
        'full_address'
    ];

    public function units()
    {
        return $this->hasMany(Unit::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function getFullAddressAttribute()
    {
        if (!$this->street_address) {
            return null;
        }

        return $this->street_address . ' ' . $this->city . ', ' . $this->state . ' ' . $this->postal_code;
    }
}
