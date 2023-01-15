<?php

namespace App\Payments;

use App\Payments\Http\Livewire\Enter;
use App\Payments\Http\Livewire\Table;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class PaymentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('app.payments.http.livewire.enter', Enter::class);
        Livewire::component('app.payments.http.livewire.table', Table::class);
    }
}
