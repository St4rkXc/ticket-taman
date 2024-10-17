<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketBookingController;

// Route for booking tickets
Route::post('/book-ticket', [TicketBookingController::class, 'store'])->name('ticket.store');

// Landing page route
Route::get('/', function () {
    return view('landing.index');
});

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// Confirmation page route
Route::get('/confirmation', function () {
    return view('landing.ticket');
});

// Ticket record page route
Route::get('/ticket-record', function () {
    return view('landing.record');
});
