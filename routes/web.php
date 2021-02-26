<?php

use App\Http\Livewire\Properties\Create as PropertyCreate;
use App\Http\Livewire\Properties\Index as PropertyIndex;
use App\Http\Livewire\Properties\Show as PropertyShow;
use App\Http\Livewire\Staff\Create as StaffCreate;
use App\Http\Livewire\Staff\Index as StaffIndex;
use Illuminate\Support\Facades\Route;

Route::view('/', 'frontpage');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/properties', PropertyIndex::class)->name('properties.index');
    Route::get('/properties/new', PropertyCreate::class)->name('properties.create');
    Route::get('/properties/{property}', PropertyShow::class)->name('properties.show');

    Route::get('/staff', StaffIndex::class)->name('staff.index');
    Route::get('/staff/new', StaffCreate::class)->name('staff.create');
});

require __DIR__.'/auth.php';
