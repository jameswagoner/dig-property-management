<?php

use App\Http\Controllers\Webhooks\PayPal\IpnListenController;
use App\Http\Controllers\Webhooks\Twilio\SmsController;
use App\Http\Controllers\Webhooks\Twilio\VoiceController;
use App\Http\Livewire\Properties\Create as PropertyCreate;
use App\Http\Livewire\Properties\Index as PropertyIndex;
use App\Http\Livewire\Properties\Show as PropertyShow;
use App\Http\Livewire\Tenants\Index as TenantIndex;
use App\Http\Livewire\Tenants\Communication as TenantCommunication;
use App\Http\Livewire\Tenants\Create as TenantCreate;
use App\Http\Livewire\Tenants\Show as TenantShow;
use App\Http\Livewire\Units\Index as UnitIndex;
use App\Http\Livewire\Units\Show as UnitShow;
use App\Http\Livewire\WorkOrders\Index as WorkOrderIndex;
use App\Http\Livewire\WorkOrders\Pending as WorkOrderPending;
use Illuminate\Support\Facades\Route;

Route::view('/', 'frontpage');

Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::prefix('manage')->name('manage.')->group(function() {
        Route::view('settings', 'manage.settings')->name('settings');

        Route::view('staff',        'manage.staff.index') ->name('staff');
        Route::view('staff/create', 'manage.staff.create')->name('staff.create');
    });

    Route::prefix('money')->name('money.')->group(function() {
        Route::view('payments', 'money.payments.index')->name('payments.index');
    });

    Route::get('work-orders',         WorkOrderIndex::class)  ->name('work-orders.index');
    Route::get('work-orders/pending', WorkOrderPending::class)->name('work-orders.pending');

    Route::get('properties',            PropertyIndex::class) ->name('properties.index');
    Route::get('properties/new',        PropertyCreate::class)->name('properties.create');
    Route::get('properties/{property}', PropertyShow::class)  ->name('properties.show');

    Route::get('tenants',               TenantIndex::class)        ->name('tenants.index');
    Route::get('tenants/create',        TenantCreate::class)       ->name('tenants.create');
    Route::get('tenants/{tenant}',      TenantShow::class)         ->name('tenants.show');
    Route::get('tenants/communication', TenantCommunication::class)->name('tenants.communication');

    Route::get('units',        UnitIndex::class)->name('units.index');
    Route::get('units/{unit}', UnitShow::class) ->name('units.show');
});

Route::prefix('webhooks')->name('webhooks.')->group(function() {
    Route::post('twilio/voice/answer',           [VoiceController::class, 'answer'])         ->name('twilio.voice.answer');
    Route::post('twilio/voice/record',           [VoiceController::class, 'record'])         ->name('twilio.voice.record');
    Route::post('twilio/voice/recording-status', [VoiceController::class, 'recordingStatus'])->name('twilio.voice.recording-status');

    Route::post('twilio/sms/incoming', [SmsController::class, 'incoming'])->name('twilio.sms.incoming');

    Route::post('paypal/ipn', IpnListenController::class)->name('paypal.ipn');
});

require __DIR__.'/auth.php';
