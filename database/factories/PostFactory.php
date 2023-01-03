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
    public function definition()
    {
        return [
            "slug" => fake()->slug(2),
            "title" => fake()->sentence(),
            "excerpt" => fake()->paragraph(),
            'body' => fake()->paragraph(7),
            "published_at" => fake()->date()
        ];
    }
}
