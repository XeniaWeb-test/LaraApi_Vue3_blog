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
            'title' => fake()->words(3),
            'price' => rand(50, 400),
            'description' => fake()->text(200),
            'category_id' => 1,
            'image' => 'https://fakestoreapi.com/img/71kWymZ+c+L._AC_SX679_.jpg'
        ];
    }
}
