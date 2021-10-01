<?php

use App\Expenses\Http\Livewire\Enter as ExpensesEnter;
use App\Expenses\Http\Livewire\Table as ExpensesTable;
use App\Http\Controllers\Webhooks\PayPal\IpnListenController;
use App\Http\Controllers\Webhooks\Twilio\SmsController;
use App\Http\Controllers\Webhooks\Twilio\VoiceController;
use App\Tenants\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'frontpage');

Route::middleware(['auth'])->group(function () {
    Route::prefix('manage')->name('manage.')->group(function() {
        Route::view('dashboard', 'dashboard')->name('dashboard');

        // region Tenants
        Route::get('tenants',               [TenantController::class, 'index']) ->name('tenants.index');
        Route::get('tenants/create',        [TenantController::class, 'create'])->name('tenants.create');
        Route::get('tenants/{tenant}',      [TenantController::class, 'show'])  ->name('tenants.show');
        Route::get('tenants/{tenant}/edit', [TenantController::class, 'edit'])  ->name('tenants.edit');
        // endregion Tenants

        // region Expenses
        Route::get('expenses', ExpensesTable::class)->name('expenses.index');
        Route::get('expenses/create', ExpensesEnter::class)->name('expenses.enter');
        // endregion Expenses
    });
});

Route::prefix('webhooks')->name('webhooks.')->group(function() {
    Route::post('twilio/voice/answer',           [VoiceController::class, 'answer'])         ->name('twilio.voice.answer');
    Route::post('twilio/voice/record',           [VoiceController::class, 'record'])         ->name('twilio.voice.record');
    Route::post('twilio/voice/recording-status', [VoiceController::class, 'recordingStatus'])->name('twilio.voice.recording-status');

    Route::post('twilio/sms/incoming', [SmsController::class, 'incoming'])->name('twilio.sms.incoming');

    Route::post('paypal/ipn', IpnListenController::class)->name('paypal.ipn');
});

require __DIR__.'/auth.php';
