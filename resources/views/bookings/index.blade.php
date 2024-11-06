@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bookings</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('bookings.create') }}" class="btn btn-primary mb-3">Create Booking</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vehicle</th>
                <th>Driver</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->vehicle->vehicle_number }}</td>
                <td>{{ $booking->driver_name }}</td>
                <td>{{ $booking->status }}</td>
                <td>
                    <!-- Action buttons here -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
