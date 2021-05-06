<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    protected $guarded = [];

    protected $appends = [
        'full_address'
    ];

    public function units(): HasMany
    {
        return $this->hasMany(Unit::class);
    }

    public function workOrders(): HasMany
    {
        return $this->hasMany(WorkOrder::class);
    }

    public function getFullAddressAttribute(): string
    {
        $street_name = $this->street_address;
        if (!$street_name) {
            $street_name = $this->name;
        }

        return $street_name . ' ' . $this->city . ', ' . $this->state . ' ' . $this->postal_code;
    }
}
