<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    public function run()
    {
        Restaurant::create([
            'name' => 'Pizza Hut',
            'address' => 'Jl. Diponegoro No. 15, Semarang',
            'position' => '-6.9825,110.4091',
        ]);

        Restaurant::create([
            'name' => 'Domino\'s Pizza',
            'address' => 'Jl. Pemuda No. 10, Semarang',
            'position' => '-6.9932,110.4203',
        ]);

        Restaurant::create([
            'name' => 'Papa John\'s Pizza',
            'address' => 'Jl. Ahmad Yani No. 20, Semarang',
            'position' => '-6.9802,110.4178',
        ]);
    }
}
