@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Booking</h1>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="vehicle_id">Vehicle</label>
            <select name="vehicle_id" class="form-control" required>
                <option value="">Select a vehicle</option>
                <option value="1">Avanza</option>
                <option value="2">Ayla</option>
                <option value="3">Brio</option>
                <option value="4">Kijang</option>
                <option value="5">Jeep</option>
                @foreach($vehicles as $vehicle)
                <option value="{{ $vehicle->id }}">{{ $vehicle->vehicle_number }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="driver">Nama Driver</label>
            <input type="text" name="driver" class="form-control" placeholder="Enter driver name" required>
        </div>
        <div class="form-group">
            <label for="start_time">Start Time</label>
            <input type="datetime-local" name="start_time" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="end_time">End Time</label>
            <input type="datetime-local" name="end_time" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Create Booking</button>
    </form>
</div>
@endsection
