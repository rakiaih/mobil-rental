<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('bookings', BookingController::class);
Route::resource('approvals', ApprovalController::class)->only(['index', 'approve', 'reject']);
Route::get('/export-bookings', [BookingController::class, 'export'])->name('bookings.export');
