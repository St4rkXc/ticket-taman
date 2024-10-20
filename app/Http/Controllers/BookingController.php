<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){

        $bookings = new Booking([
            'nama'=>'desta',
            'adult_count'=>'1',
            'child_count'=>'1',
            'booking_date'=> now(),
        ]);
        // $bookings->nama = "desta";
        // $bookings->adult_count = 1;
        // $bookings->child_count = 1;
        // $bookings->booking_date = now();
        $bookings->save();
        
        return view('landing.index');
    }
}
