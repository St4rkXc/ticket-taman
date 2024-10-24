<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')
    ->name('bookings.')
    ->group(function() {
        Route::get('', [BookingController::class, 'index']); // Landing page

        Route::post('/confirmation', [BookingController::class, 'create'])->name('submit'); // Create and go to confirm

        Route::post('/ticket-record', [BookingController::class, 'store'])->name('store'); // Confirm
        
        Route::get('/ticket-record', [RecordController::class, 'index']); // Ticket records
        
        Route::get('/dashboard', [DashboardController::class, 'index']); // Dashboard
    });