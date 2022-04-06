<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Koncerti'
        ]);

        DB::table('categories')->insert([
            'name' => 'Hrana'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sport'
        ]);

        DB::table('categories')->insert([
            'name' => 'Kupovina'
        ]);

        DB::table('categories')->insert([
            'name' => 'Konferencije'
        ]);
    }
}
