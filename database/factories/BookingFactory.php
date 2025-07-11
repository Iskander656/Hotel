<?php

namespace Database\Factories;

use App\Models\Guest;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $room = Room::inRandomOrder()->first();
        $guest = Guest::inRandomOrder()->first();
        
        return [
            'room_id' => $room->id,
            'guest_id' => $guest->id,
            'check_in_at' => fake()->dateTimeThisMonth(),
            'check_out_at' => fake()->dateTimeThisMonth(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
