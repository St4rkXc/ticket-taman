<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketBooking;

class TicketBookingController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'adults' => 'required|integer|min:0',
            'kids' => 'required|integer|min:0',
            'booking_date' => 'required|date',
        ]);

        // Calculate the total price (e.g., adult = $10, kid = $5)
        $totalPrice = ($request->adults * 10) + ($request->kids * 5);

        // Create a new ticket booking
        $newBooking = TicketBooking::create([
            'name' => $request->name,
            'adults' => $request->adults,
            'kids' => $request->kids,
            'booking_date' => $request->booking_date,
            'total_price' => $totalPrice,
        ]);

        // Check if booking was successfully created
        if ($newBooking) {
            return redirect('/ticket-record')->with('success', 'Booking Successful!');
        } else {
            return redirect()->back()->with('error', 'Failed to book ticket. Please try again.');
        }
    }
}
