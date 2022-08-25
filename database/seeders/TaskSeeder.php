<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = Task::factory(100)->create();

        $tasks->each(function($task) {
            $tags = Tag::inRandomOrder()->limit(rand(0,3))->get();
            $task->tags()->saveMany($tags);
        });
    }
}
