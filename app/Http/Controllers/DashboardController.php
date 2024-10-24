<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $bookings = DB::table('bookings')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as total_bookings'))
            ->where('created_at', '>=', now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();


        $totalBookings = DB::table('bookings')
            ->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])
            ->count();
            
        $totalVisitorsToday = DB::table('bookings')
            ->whereDate('created_at', now())
            ->sum(DB::raw('adult_count + child_count'));

        $bookingDetails = DB::table('bookings')
            ->select('nama', 'created_at', 'adult_count', 'child_count')
            ->orderBy('created_at', 'desc')
            ->limit(5) // Mengambil 5 data terakhir
            ->get();

        $labels = [];
        $data = [];
        foreach ($bookings as $booking) {
            $labels[] = \Carbon\Carbon::parse($booking->date)->format('D'); // Hari (Mon, Tue, dst.)
            $data[] = $booking->total_bookings; // Jumlah booking
        }


        return view('dashboard.index', compact('labels', 'data', 'totalBookings', 'totalVisitorsToday', 'bookingDetails'));
    }
}