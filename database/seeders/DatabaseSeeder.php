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
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Nugraha Akbar',
            'email' => 'garuda.bangkit@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);
    }
}
