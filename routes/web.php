<?php
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;


//BOOKING SECTION
// Route::get('/', [BookingController::class , 'index']);

// Route::post('/', [BookingController::class , 'store'])->name('booking.create');

Route::get('/', [BookingController::class , 'index'])->name('booking.create');
Route::post('/', [BookingController::class , 'store'])->name('booking.store');
Route::get('/confirmation', [BookingController::class, 'confirmation'])->name('booking.confirmation');
Route::post('/confirmation', [BookingController::class, 'storeFinal'])->name('booking.store.final');

Route::get('/confirmation', [ConfirmationController::class , 'index']);

Route::get('/ticket-record', [RecordController::class , 'index']);

Route::get('/dashboard', [DashboardController::class , 'index']);