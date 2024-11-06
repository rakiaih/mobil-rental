<?php

namespace App\Http\Controllers;

use App\Models\Approval;
use App\Models\Booking;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function index()
    {
        $approvals = Approval::with('booking', 'approver')->get();
        return view('approvals.index', compact('approvals'));
    }

    public function approve($id)
    {
        $approval = Approval::findOrFail($id);
        $approval->status = 'approved';
        $approval->save();

        $booking = Booking::findOrFail($approval->booking_id);
        $booking->status = 'approved';
        $booking->save();

        return redirect()->route('approvals.index')->with('success', 'Booking approved successfully!');
    }

    public function reject($id)
    {
        $approval = Approval::findOrFail($id);
        $approval->status = 'rejected';
        $approval->save();

        $booking = Booking::findOrFail($approval->booking_id);
        $booking->status = 'rejected';
        $booking->save();

        return redirect()->route('approvals.index')->with('success', 'Booking rejected!');
    }
}
