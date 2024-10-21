<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){

        // $bookings = new Booking();
        
        // $bookings = new Booking([
        //     'nama'=>'desta',
        //     'adult_count'=>'1',
        //     'child_count'=>'1',
        //     'booking_date'=> now(),
        // ]);
        // $bookings->nama = "desta";
        // $bookings->adult_count = 1;
        // $bookings->child_count = 1;
        // $bookings->booking_date = now();
        // $bookings->save();
        
        return view('landing.index');
    }

     private function calculatePrice($adults, $children)
    {
        $adultPrice = 10;  // Price per adult ticket
        $childPrice = 5;   // Price per child ticket

        return ($adults * $adultPrice) + ($children * $childPrice);
    }

    public function store(){
        $bookings = Booking::create([
            'nama'=> request()->input('nama'),
            'adult_count'=>request()->input('adult_count'),
            'child_count'=>request()->input('child_count'),
            'booking_date'=>request()->input('booking_date'),
        ]);

        return view('landing.ticket', [
            'nama' => $bookings->nama,
            'adult_count' => $bookings->adult_count,
            'child_count' => $bookings->child_count,
            'booking_date' => $bookings->booking_date,
            'total_price' => $this->calculatePrice($bookings->adult_count, $bookings->child_count),
        ]);
    }
}
