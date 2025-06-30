<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Hotel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $city = City::inRandomOrder()->first();
        $objs = [
            'Grand Imperial Hotel',
            'The Sapphire Palace',
            'Aurora Resort & Spa',
            'Crystal Bay Hotel',
            'Mountain View Inn',
            'Ocean Breeze Suites',
            'Royal Orchid Hotel',
            'Sunset Boulevard Hotel',
            'Emerald Crown Hotel',
            'Luna Sky Tower',
            'Golden Horizon Hotel',
            'Blue Lagoon Resort',
            'The Velvet Rose Inn',
            'Palm Heights Hotel',
            'The Continental Palace',
            'Skyline Retreat',
            'Crescent Moon Hotel',
            'Harborfront Haven',
            'The Serene Garden',
            'Prestige Plaza Hotel',

        ];

        foreach ($objs as $obj) {
            Hotel::create([
                'hotel' => $obj,
                'city_id' => $city->id,
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber(),
                'email' => fake()->safeEmail(),
                'image' => null,
                'stars' => fake()->numberBetween(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
