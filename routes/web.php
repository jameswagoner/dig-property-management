<?php

use App\Communication\Http\Livewire\Converstation as CommunicationConverstation;
use App\Communication\Http\Livewire\Inbox as CommunicationInbox;
use App\Expenses\Http\Livewire\Enter as ExpensesEnter;
use App\Expenses\Http\Livewire\Table as ExpensesTable;
use App\Http\Controllers\Webhooks\Twilio\SmsController;
use App\Http\Controllers\Webhooks\Twilio\VoiceController;
use App\Labor\Http\Livewire\Enter as LaborEnter;
use App\Labor\Http\Livewire\Table as LaborTable;
use App\Payments\Http\Livewire\Enter as PaymentsEnter;
use App\Payments\Http\Livewire\Table as PaymentsTable;
use App\Tenants\Http\Controllers\TenantController;
use App\Units\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'frontpage');

Route::middleware(['auth'])->group(function () {
    Route::prefix('manage')->name('manage.')->group(function() {
        Route::view('dashboard', 'dashboard')->name('dashboard');

        // region Communication
        Route::get('communication',        CommunicationInbox::class)        ->name('communication.inbox');
        Route::get('communication/{user}', CommunicationConverstation::class)->name('communication.conversation');
        // endregion Communication

        // region Expenses
        Route::get('payments',        PaymentsTable::class)->name('payments.index');
        Route::get('payments/create', PaymentsEnter::class)->name('payments.enter');
        // endregion Expenses

        // region Labor Expenses
        Route::get('labor',        LaborTable::class)->name('labor.index');
        Route::get('labor/create', LaborEnter::class)->name('labor.enter');
        // endregion Labor Expenses

        // region Units
        Route::get('units',               [UnitController::class, 'index']) ->name('units.index');
        Route::get('units/create',        [UnitController::class, 'create'])->name('units.create');
        Route::get('units/{unit}',        [UnitController::class, 'show'])  ->name('units.show');
        Route::get('units/{unit}/edit',   [UnitController::class, 'edit'])  ->name('units.edit');
        Route::post('units',              [UnitController::class, 'store']) ->name('units.store');
        Route::post('units/{unit}',       [UnitController::class, 'update'])->name('units.update');
        // endregion Units

        // region Tenants
        Route::get('tenants',               [TenantController::class, 'index'])->name('tenants.index');
        Route::get('tenants/create',        [TenantController::class, 'create'])->name('tenants.create');
        Route::get('tenants/{tenant}',      [TenantController::class, 'show'])->name('tenants.show');
        Route::get('tenants/{tenant}/edit', [TenantController::class, 'edit'])->name('tenants.edit');
        // endregion Tenants
    });
});

Route::prefix('webhooks')->name('webhooks.')->group(function() {
    Route::post('twilio/voice/answer',           [VoiceController::class, 'answer'])         ->name('twilio.voice.answer');
    Route::post('twilio/voice/record',           [VoiceController::class, 'record'])         ->name('twilio.voice.record');
    Route::post('twilio/voice/recording-status', [VoiceController::class, 'recordingStatus'])->name('twilio.voice.recording-status');

    Route::post('twilio/sms/incoming', [SmsController::class, 'incoming'])->name('twilio.sms.incoming');
});

require __DIR__.'/auth.php';
