<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostCategory;

class PostCategorySeeder extends Seeder
{
    public function run(): void
    {
        $postIds = range(1, 10);
        $categoryIds = range(1, 5);

        foreach ($postIds as $postId) {
            PostCategory::create([
                'post_id' => $postId,
                'category_id' => rand(min($categoryIds), max($categoryIds)),
            ]);
        }
    }
}
