<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Comment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $comment = Comment::inRandomOrder()->first();

        return [
            'user_id' =>  $user->id, // Assign the reply to a user
            'comment_id' =>  $comment->id, // Assign the reply to a comment
            'content' => fake()->text(),
        ];
    }
}
