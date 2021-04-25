<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kodeine\Metable\Metable;

class Unit extends Model
{
    use HasFactory;
    use Metable;

    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
