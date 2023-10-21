<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
           'user_id' => $this->faker->numberBetween(1, 10),
           'category_id' => $this->faker->numberBetween(1, 4),
           'title' => $this->faker->sentence(),
           'description' => $this->faker->paragraph(),
           'image' => fake()->image( 'public/storage/posts', 640, 480, null, false),
           'slug' => $this->faker->slug(),

        ];
    }
}