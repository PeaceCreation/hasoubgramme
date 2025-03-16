<?php

namespace Database\Factories;
use App\Models\User;
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
        $images = ['pic1.jpg', 'pic2.jpg'];
        return [

                'description' => $this->faker->sentence(),
                'slug' => $this->faker->regexify('[A-Za-z0-9]{10}'),
                'user_id' => User::factory(),
                'image' => $this->faker->imageUrl(100, 100, 'business', true),
                'likes' => $this->faker->boolean(),
        ];
    }
}
