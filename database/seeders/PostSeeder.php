<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Post::factory(10)->create();
    }
}
