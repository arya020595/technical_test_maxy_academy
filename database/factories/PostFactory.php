<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
        $user = User::inRandomOrder()->first();
        $category = Category::inRandomOrder()->first();

        return [
            'user_id' =>  $user->id,
            'category_id' => $category->id,
            'title' => fake()->sentence(3),
            'content' => fake()->text(),
            // 'image' => fake()->image('public/storage/posts', 400, 300)
        ];
    }
}
