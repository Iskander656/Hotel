<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    
}
