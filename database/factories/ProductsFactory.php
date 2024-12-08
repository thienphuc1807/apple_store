<?php

namespace Database\Factories;

use App\Models\categories;
use App\Models\subcategories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'actual_price' => fake()->numberBetween(10000000, 30000000),
            'old_price' => fake()->numberBetween(10000000, 30000000),
            'categories_id' => fake()->numberBetween(1, 4),
            'subcategories_id' => fake()->numberBetween(1, 4),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
