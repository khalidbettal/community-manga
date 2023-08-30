<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 11),
            'post_id' => fake()->numberBetween(1, 30),
            'parent_id' => null, // To create top-level comments
            'comment' => $this->faker->paragraph,
            // Define other comment-related fields here
        ];
    }

        public function configure()
        {
            return $this->state(function (array $attributes) {
                return [
                    'parent_id' => Comment::inRandomOrder()->first()->id ?? null,
                ];
            });
        }
}
