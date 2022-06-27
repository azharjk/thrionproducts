<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'src' => $this->faker->imageUrl(),
            'alt' => $this->faker->text(10)
        ];
    }
}
