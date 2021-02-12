<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'frontpage');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/properties', App\Http\Livewire\Properties\Index::class)->name('properties.index');
    Route::get('/properties/new', App\Http\Livewire\Properties\Create::class)->name('properties.create');
    Route::get('/properties/{property}', App\Http\Livewire\Properties\Show::class)->name('properties.show');
});

require __DIR__.'/auth.php';
