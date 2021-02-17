<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = $this->faker->sentence();
        $slug = Str::of($title)->slug();
        return [
            'title' => $title,
            'slug' => $slug,
            'image' => $this->faker->imageUrl(300, 300, 'animals'),
            'user_id' => 1,
            'body' => $this->faker->paragraphs(20, true),
            'created_at' => $this->faker->dateTimeBetween('-1 year', '-1 week'),
        ];
    }
}
