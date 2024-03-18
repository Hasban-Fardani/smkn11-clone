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
        $status = $this->faker->randomElement(['published', 'request for publish', 'draft']);
        $is_accepted = $status === 'published' ? true : false;
        return [
            'image' => $this->faker->imageUrl(),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraphs(3, true),
            'description' => $this->faker->sentence(),
            'user_id' => $this->faker->numberBetween(1, 10),
            'category_id' => $this->faker->numberBetween(1, 10),
            'status' => $status,
            'is_accepted' => $is_accepted,
        ];
    }
}
