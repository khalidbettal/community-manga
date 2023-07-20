<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'city_id' => fake()->numberBetween(1, 10),
            'category_id' => fake()->numberBetween(1, 10),
            'title' => fake()->sentence(5),
            'description' => fake()->sentence(20),
            'image' => fake()->imageUrl(640, 480, 'cats', true),
            'slug' => fake()->slug(),
            'published_at' => fake()->dateTime(),
        ];
    }
}
