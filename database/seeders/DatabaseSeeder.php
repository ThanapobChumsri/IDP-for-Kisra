<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\MaterialTypeSeeder;
use Database\Seeders\MaterialSeeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (DB::table('type_materials')->count() === 0) {
            $this->call(MaterialTypeSeeder::class);
        }
        if (DB::table('materials')->count() === 0) {
            $this->call(MaterialSeeder::class);
        }
        if (DB::table('menus')->count() === 0) {
            $this->call(MenuSeeder::class);
        }
        // $this->call([
        //     MaterialTypeSeeder::class,
        //     MaterialSeeder::class,
        //     MenuSeeder::class,
        // ]);
    }
}
