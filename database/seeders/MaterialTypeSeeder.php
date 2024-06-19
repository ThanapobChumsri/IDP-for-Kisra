<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialTypeSeeder extends Seeder
{
    public function run()
    {
        DB::table('type_materials')->insert([
            [
                'name' => 'meat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'vegetable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'dairy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'bread',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'spicemix',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
