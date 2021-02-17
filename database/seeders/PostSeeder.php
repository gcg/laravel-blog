<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

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
            Post::factory()
                ->count(20)
                ->create();
        }
    }
}
