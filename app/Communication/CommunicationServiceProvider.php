<?php

namespace App\Communication;

use App\Communication\Http\Livewire\Converstation;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class CommunicationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('app.communication.http.livewire.converstation', Converstation::class);
    }
}
