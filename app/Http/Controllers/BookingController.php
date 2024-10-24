<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    private function calculatePrice($adults, $children)
    {
       $adultPrice = 10; 
       $childPrice = 5; 
    
       return ($adults * $adultPrice) + ($children * $childPrice);
    }
    
    public function index(){
        
        return view('landing.index');   
    }

    public function create(){
        
        return view('landing.ticket');
    }

    public function store(Request $request){
        $bookings =Booking::create([
            'nama' => $request->input('nama'),
            'adult_count' => $request->input('adult_count'),
            'child_count' => $request->input('child_count'),
            'booking_date' => $request->input('booking_date'),
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
