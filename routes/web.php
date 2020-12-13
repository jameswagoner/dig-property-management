<?php

use App\Http\Livewire\Properties\NewProperty;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::redirect('/', 'dashboard');

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::view('properties', 'properties.list')->name('properties.list');
    Route::view('properties/new', 'properties.new')->name('properties.new');

    Route::view('tasks', 'tasks')->name('tasks');

    Route::view('staff', 'staff.list')->name('staff.list');
    Route::view('staff/new', 'staff.new')->name('staff.new');

    Route::view('users', 'users.list')->name('users.list');
    Route::view('users/new', 'users.new')->name('users.new');
});
