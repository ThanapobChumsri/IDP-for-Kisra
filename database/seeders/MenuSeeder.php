<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run()
    {
        DB::table('menus')->insert([
            [
                'name' => 'Fish N Chip',
                'type_menu_id' => 1, // Replace with actual type_menu_id
                'material' => json_encode(['fish', 'potato', 'oil']), // Example of JSON data
                'image' => 'fish_n_chip.jpg', // Example image path
                'detail' => 'Delicious fish and chips dish.',
                'price' => 12.99,
                'cal' => 450.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Steak',
                'type_menu_id' => 2, // Replace with actual type_menu_id
                'material' => json_encode(['beef', 'potato', 'vegetables']), // Example of JSON data
                'image' => 'steak.jpg', // Example image path
                'detail' => 'Juicy steak served with vegetables.',
                'price' => 24.99,
                'cal' => 600.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Corn soup',
                'type_menu_id' => 3, // Replace with actual type_menu_id
                'material' => json_encode(['corn', 'cream', 'butter']), // Example of JSON data
                'image' => 'corn_soup.jpg', // Example image path
                'detail' => 'Creamy corn soup.',
                'price' => 8.99,
                'cal' => 300.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
