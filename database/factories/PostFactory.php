<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'image' => 'sample_image.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
