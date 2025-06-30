<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Moscow',
            'St-Petersburg',
            'Ulyanovsk',
            'Ufa',
            'Chelyabinsk',
            'Kazan',
            'Vladivostok',
            'Sevastopol',
            'Sochi',
            'Krym',
            'Pskov',
        ];

        foreach($objs as $obj){
            City::create([
                'city' => $obj,
            ]);
        }
    }
}
