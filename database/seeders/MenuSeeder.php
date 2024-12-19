<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        Menu::create([
            'restaurant_id' => 1,
            'name' => 'Margherita Pizza',
            'price' => 75000,
            'category' => 'Pizza',
            'rank' => 1,
        ]);

        Menu::create([
            'restaurant_id' => 1,
            'name' => 'Pepperoni Pizza',
            'price' => 85000,
            'category' => 'Pizza',
            'rank' => 2,
        ]);

        Menu::create([
            'restaurant_id' => 2,
            'name' => 'BBQ Chicken Pizza',
            'price' => 95000,
            'category' => 'Pizza',
            'rank' => 1,
        ]);
    }
}

