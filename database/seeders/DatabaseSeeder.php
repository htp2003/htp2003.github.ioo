<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $this->call([
            PostSeeder::class,
        ]);
        Category::create(['name' => 'Cybercrime', 'description' => 'Description for Cybercrime']);
        Category::create(['name' => 'Drug Crime', 'description' => 'Description for Drug Crime']);
        Category::create(['name' => 'Homicide', 'description' => 'Description for Homicide']);
        Category::create(['name' => 'Stimulants', 'description' => 'Description for Stimulants']);
        Category::create(['name' => 'Financial Crime', 'description' => 'Description for Financial Crime']);
    }
}
