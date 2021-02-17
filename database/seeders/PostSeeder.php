<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = Post::count();
        if ($count === 0) {
            $post = new Post;
            $post->title = 'Hello World';
            $post->user_id = 1;
            $post->slug = Str::of($post->title)->slug();
            $post->body = 'Hey this is my first post';
            $post->save();
        }
    }
}
