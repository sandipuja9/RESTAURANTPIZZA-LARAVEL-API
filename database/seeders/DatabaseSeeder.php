<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RestaurantSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RestaurantSeeder::class);
        $this->call(MenuSeeder::class);

    }
}

