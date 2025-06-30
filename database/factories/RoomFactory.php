<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hotel = Hotel::inRandomOrder()->first();        
        return [
            'hotel_id' => $hotel->id,
            'room_number' => fake()->numberBetween(1,500),
            'type' => fake()->randomElement(['single','double','suite']),
            'per_night_price' => fake()->numberBetween(200,2000),
            'is_available' => fake()->boolean(44),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
