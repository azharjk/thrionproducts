<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_name' => $this->faker->name(),
            'whatsapp_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'status' => $this->faker->randomElement(['NEW', 'SHIPPED', 'DELIVERED', 'CANCELLED']),
            'total_price' => $this->faker->numberBetween(100000, 9000000),
            'payment_method' => $this->faker->randomElement(['COD', 'TRANSFER'])
        ];
    }
}
