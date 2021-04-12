<?php

use App\Http\Controllers\Webhooks\Twilio\VoiceController;
use App\Http\Livewire\Properties\Create as PropertyCreate;
use App\Http\Livewire\Properties\Index as PropertyIndex;
use App\Http\Livewire\Properties\Show as PropertyShow;
use Illuminate\Support\Facades\Route;

Route::view('/', 'frontpage');

Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::prefix('manage')->name('manage.')->group(function() {
        Route::view('settings', 'manage.settings')->name('settings');

        Route::view('staff',        'manage.staff.index') ->name('staff');
        Route::view('staff/create', 'manage.staff.create')->name('staff.create');
    });

    Route::get('properties',            PropertyIndex::class) ->name('properties.index');
    Route::get('properties/new',        PropertyCreate::class)->name('properties.create');
    Route::get('properties/{property}', PropertyShow::class)  ->name('properties.show');
});

Route::prefix('webhooks')->name('webhooks.')->group(function() {
    Route::post('twilio/voice/answer',           [VoiceController::class, 'answer'])         ->name('twilio.voice.answer');
    Route::post('twilio/voice/record',           [VoiceController::class, 'record'])         ->name('twilio.voice.record');
    Route::post('twilio/voice/recording-status', [VoiceController::class, 'recordingStatus'])->name('twilio.voice.recording-status');
});

require __DIR__.'/auth.php';
