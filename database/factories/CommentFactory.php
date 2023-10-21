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
            'user_id' => fake()->numberBetween(1, 10),
            'post_id' => fake()->numberBetween(1, 30),
            'parent_id' => null,
            'comment' => $this->faker->paragraph(),
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure(): CommentFactory
    {
        return $this->state(function (array $attributes): array {
            return [
                'parent_id' => Comment::query()->inRandomOrder()->first()->id ?? null
            ];
        });
    }
}