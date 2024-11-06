@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Approvals</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Booking</th>
                <th>Approver</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($approvals as $approval)
            <tr>
                <td>{{ $approval->id }}</td>
                <td>{{ $approval->booking->id }}</td>
                <td>{{ $approval->approver->username }}</td>
                <td>{{ $approval->status }}</td>
                <td>
                    <a href="{{ route('approvals.approve', $approval->id) }}" class="btn btn-success">Approve</a>
                    <a href="{{ route('approvals.reject', $approval->id) }}" class="btn btn-danger">Reject</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
