<?php

namespace Database\Factories;

use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post_comment>
 */
class post_commentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $posts = post::all()->pluck('id')->toArray();
        $postIds = $posts[array_rand($posts,1)];
        return [
            'comment_text' => $this->faker->sentence(),
            'post_id' => $postIds,
            'user_id' => 1,
        ];
    }
}
