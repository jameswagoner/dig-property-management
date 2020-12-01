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

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function toSearchableArray()
    {
        return $this->toArray();
    }
}
