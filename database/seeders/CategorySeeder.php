<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Laptop',
            'slug' => 'laptop',
        ]);

        Category::create([
            'name' => 'Smartphone',
            'slug' => 'smartphone',
        ]);

        Category::create([
            'name' => 'Tablet',
            'slug' => 'tablet',
        ]);

        Category::create([
            'name' => 'Smartwatch',
            'slug' => 'smartwatch',
        ]);

        Category::create([
            'name' => 'Headphone',
            'slug' => 'headphone',
        ]);

        Category::create([
            'name' => 'Speaker',
            'slug' => 'speaker',
        ]);

        Category::create([
            'name' => 'Camera',
            'slug' => 'camera',
        ]);

        Category::create([
            'name' => 'Printer',
            'slug' => 'printer',
        ]);

        Category::create([
            'name' => 'Monitor',
            'slug' => 'monitor',
        ]);

        Category::create([
            'name' => 'Keyboard',
            'slug' => 'keyboard',
        ]);
    }
}
