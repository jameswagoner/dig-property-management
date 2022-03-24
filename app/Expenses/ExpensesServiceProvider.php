<?php

namespace App\Expenses;

use App\Expenses\Http\Livewire\Enter;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class ExpensesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('app.expenses.http.livewire.enter', Enter::class);
    }
}
