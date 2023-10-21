<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::factory()->create([
            'categoryName' => 'manga',
            'slug' => 'manga',
        ]);
        \App\Models\Category::factory()->create([
            'categoryName' => 'manhwa',
            'slug' => 'manhwa',
        ]);
        \App\Models\Category::factory()->create([
            'categoryName' => 'manhua',
            'slug' => 'manhua',
        ]);
        \App\Models\Category::factory()->create([
            'categoryName' => 'light novel',
            'slug' => 'light-novel',
        ]);
        
    }
}
