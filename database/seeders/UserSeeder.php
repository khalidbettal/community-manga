<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();
        user::factory()->create([
            'name' => 'khalid',
            'email' => 'khalidbettal@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234515958'),
            'remember_token' => Str::random(10),
        ]);





    }
}
