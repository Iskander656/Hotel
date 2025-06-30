<?php

namespace Database\Seeders;

use App\Models\City;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Room;
use App\Models\User;
use App\Models\Guest;
use App\Models\Hotel;
use App\Models\Booking;
use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\HotelSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CitySeeder::class,
            HotelSeeder::class,
        ]);
        Hotel::factory()->count(40)->create();
        Room::factory()->count(30)->create();
        Guest::factory()->count(30)->create();
        Booking::factory()->count(50)->create();
    }
}
