<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->country(),
            'distance' => $this->faker->numberBetween(1000, 5000),
            'status' =>'1'
        ];
    }
}