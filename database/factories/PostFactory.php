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
    // App\Models\Post::factory()->times(50)->create(['user_id' => 4]); in php artisan tinker
    public function definition()
    {
        return [
            "body" => $this->faker->sentence(20)
        ];
    }
}
