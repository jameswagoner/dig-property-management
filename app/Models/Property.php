<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
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
        $street_name = $this->street_address;
        if (!$street_name) {
            $street_name = $this->name;
        }

        return $street_name . ' ' . $this->city . ', ' . $this->state . ' ' . $this->postal_code;
    }
}
