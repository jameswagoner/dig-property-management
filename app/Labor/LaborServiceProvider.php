<?php

namespace App\Labor;

use App\Labor\Http\Livewire\Enter;
use App\Labor\Http\Livewire\Table;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaborServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('app.labor.http.livewire.enter', Enter::class);
        Livewire::component('app.labor.http.livewire.table', Table::class);
    }
}
