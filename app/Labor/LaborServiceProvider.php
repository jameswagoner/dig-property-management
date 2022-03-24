<?php

namespace App\Labor;

use App\Labor\Http\Livewire\Enter;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaborServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('app.labor.http.livewire.enter', Enter::class);
    }
}
