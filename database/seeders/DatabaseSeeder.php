<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\CategorySeeder;
use Database\Seeders\PaymentSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\ReservationSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            RoleSeeder::class,      // Memanggil RoleSeeder terlebih dahulu
            UserSeeder::class,      // Memanggil UserSeeder setelah RoleSeeder
        CategorySeeder::class,
        ProductSeeder::class,
        // PaymentSeeder::class,
        // ReservationSeeder::class,
        ]);
        User::create([
            'role_id' => 1, // Sesuaikan dengan id role yang ada di tabel roles
            'name' => 'Admin001',
            'email' => '1@1',
            'password' => Hash::make('1'), // Hashing password
            'phone' => '081234567890',
        ]);
    }
}
