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
            'category_id' => 1, // Menghubungkan dengan kategori
            'name' => $this->faker->word(), // Pastikan nama produk unik
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 100, 1000), // Harga antara 100 dan 1000
            'stock' => $this->faker->numberBetween(1, 100), // Stok antara 1 dan 100
            'fuel' => 'Electric',
            'transmission' => 'Manual',
            'seats' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
