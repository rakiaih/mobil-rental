<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBookings = Booking::count();
        $approvedBookings = Booking::where('status', 'approved')->count();
        $pendingBookings = Booking::where('status', 'pending')->count();

        return view('dashboard.index', compact('totalBookings', 'approvedBookings', 'pendingBookings'));
    }
}

