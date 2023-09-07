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
            'category_id' => mt_rand(1, 10),
            'name' => fake()->sentence(mt_rand(2, 5)),
            'slug' => fake()->slug(),
            'price' => mt_rand(1000, 10000),
            'quantity' => mt_rand(1, 10),
            'description' => fake()->paragraph(mt_rand(2, 5)),
            'image' => fake()->imageUrl(),
            'color' => fake()->colorName(),
        ];
    }
}
