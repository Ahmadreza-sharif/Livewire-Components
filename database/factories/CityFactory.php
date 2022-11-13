<?php

namespace Database\Factories;

use App\Models\country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $id = country::all()->pluck('id')->toArray();
        return [
            'name' => $this->faker->city(),
            'country_id' => $id[array_rand($id)],
            'state_id' => 1
        ];
    }
}
