<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')
    ->name('bookings.')
    ->group(function() {
        Route::get('', [BookingController::class, 'index'])->name('index'); // Landing page

        Route::post('confirmation', [BookingController::class, 'confirm'])->name('confirm'); // Create and go to confirm

        Route::post('ticket-save', [BookingController::class, 'save'])->name('save'); // Confirm

        Route::get('ticket-record', [BookingController::class, 'record'])->name('ticket-record'); // Confirm
 
    });