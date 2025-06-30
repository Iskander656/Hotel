<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hotel = Hotel::inRandomOrder()->first();
        $city = City::inRandomOrder()->first();
        return [
            'city_id' => $city->id,
            'hotel' => $hotel->hotel,
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'image' => null,
            'stars' => fake()->numberBetween(1,5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
