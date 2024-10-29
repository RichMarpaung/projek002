<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1, // Menghubungkan dengan user
            'product_id' => 1, // Menghubungkan dengan produk
            'awal_sewa' => $this->faker->dateTimeBetween('now', '+1 week'),
            'akhir_sewa' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'jaminan' => 'jaminan', // Status sewa
            'status' => 'OK', // Status sewa
            'total_payment' => $this->faker->randomFloat(2, 100, 1000), // Total pembayaran
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
