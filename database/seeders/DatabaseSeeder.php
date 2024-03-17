<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@filament.test',
            'is_customer' => false,
        ]);

        User::factory()->create([
            'name' => 'Client 1',
            'email' => 'customer1@filament.test',
            'is_customer' => true,
        ]);

        User::factory()->create([
            'name' => 'Client 2',
            'email' => 'customer2@filament.test',
            'is_customer' => true,
        ]);

        $this->call([
            CategorySeeder::class
        ]);
    }
}
