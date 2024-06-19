<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materials')->insert([
            ['name' => 'carrot', 'type_material_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'corn', 'type_material_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'potato', 'type_material_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'chili', 'type_material_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'onion', 'type_material_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'garlic', 'type_material_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'pork', 'type_material_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'fish', 'type_material_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'beef', 'type_material_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'chicken', 'type_material_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'cream', 'type_material_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'butter', 'type_material_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'salt', 'type_material_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'pepper', 'type_material_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'tomato', 'type_material_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'lettuce', 'type_material_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'bread', 'type_material_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'cheese', 'type_material_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'bacon', 'type_material_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'egg', 'type_material_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

    }
}
