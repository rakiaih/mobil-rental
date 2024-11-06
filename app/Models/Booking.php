<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'vehicle_id', 'driver_id', 'start_time', 'end_time', 'status'];

    // app/Models/Booking.php

public function vehicle()
{
    return $this->belongsTo(Vehicle::class);
}

public function user()
{
    return $this->belongsTo(User::class, 'driver_id'); // Gantilah 'driver_id' sesuai nama kolom Anda
}

}
