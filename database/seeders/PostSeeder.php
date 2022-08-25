<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(100)->create();

        $posts->each(function($post) {
            $tags = Tag::inRandomOrder()->limit(rand(0,3))->get();
            $post->tags()->saveMany($tags);
        });
    }
}
