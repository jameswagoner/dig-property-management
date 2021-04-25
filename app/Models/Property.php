<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kodeine\Metable\Metable;

class Property extends Model
{
    use HasFactory;
    use Metable;

    protected $guarded = [];

    protected $appends = [
        'full_address'
    ];

    public function units()
    {
        return $this->hasMany(Unit::class);
    }

    public function workOrders()
    {
        return $this->hasMany(WorkOrder::class);
    }

    public function getFullAddressAttribute()
    {
        if (!$this->street_address) {
            return null;
        }

        return $this->street_address . ' ' . $this->city . ', ' . $this->state . ' ' . $this->postal_code;
    }
}
