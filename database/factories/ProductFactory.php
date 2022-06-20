<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->realText(),
            'price' => $this->faker->numberBetween(75000, 10000000),
            'thumbnail' => $this->faker->imageUrl(),
            'thumbnail_alt' => $this->faker->colorName()
        ];
    }

    public function withoutDescription()
    {
        return $this->state(function (array $attributes) {
            return [
                'description' => null,
            ];
        });
    }

    public function withoutThumbnailAlt()
    {
        return $this->state(function (array $attributes) {
            return [
                'thumbnail_alt' => null,
            ];
        });
    }
}
