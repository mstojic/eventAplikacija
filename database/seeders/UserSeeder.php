<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Matej',
            'email' => 'mstojic@gmail.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now()
        ]);

        User::factory()->times(10)->create();
    }
}
