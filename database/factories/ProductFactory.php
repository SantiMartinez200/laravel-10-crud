<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake()->randomNumber(4,false),
            'name' => fake()->name(),
            'quantity' => fake()->randomNumber(2,false),
            'price' => fake()->randomFloat(2,5,5),
            'description' => fake()->text(50),
        ];
    }
}
