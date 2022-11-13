<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category = category::all()->pluck('id')->toArray();
        $cat_id = $category[array_rand($category,1)];
        return [
            'name' => 'Product ' . random_int(1,100),
            'price' => round(random_int(1000,5000),-1),
            'category_id' => $cat_id,
            'slug' => $this->faker->slug(),
            'description' => $this->faker->sentence()
        ];
    }
}
