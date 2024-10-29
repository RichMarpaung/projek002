<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'payment_id' => 1,
            'code_reservasi'=>fake()->unique()->word,
            'status'=>"Returned",
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
