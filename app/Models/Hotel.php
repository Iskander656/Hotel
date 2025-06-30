<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hotel extends Model
{
    /** @use HasFactory<\Database\Factories\HotelFactory> */
    use HasFactory;

    public function City()
    {
        return $this->BelongsTo(City::class);
    }
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
