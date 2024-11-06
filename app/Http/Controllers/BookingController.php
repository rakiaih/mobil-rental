<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Exports\BookingsExport;
use Maatwebsite\Excel\Facades\Excel;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('vehicle', 'user')->get();
        return view('bookings.index', compact('bookings'));
    }
    

    public function create()
    {
        $vehicles = Vehicle::where('status', 'available')->get();
        return view('bookings.create', compact('vehicles'));
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'vehicle_id' => 'required',
            'driver_name' => 'required|string',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);
    
        // Simpan booking ke database
        Booking::create([
            'vehicle_id' => $request->vehicle_id,
            'driver_name' => $request->driver_name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'status' => 'pending', // Status default
            
        ]);
    
        // Redirect ke halaman index bookings dengan pesan sukses
        return redirect()->route('bookings.index')->with('success', 'Booking created successfully');
    }
    


    public function export()
    {
        return Excel::download(new BookingsExport, 'bookings.xlsx');
    }
}

