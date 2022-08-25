<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Creator;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(10)->create();

        $users->each(function($user, $index){
            if($index % 3 === 0) {
                Creator::factory()->create(['user_id' => $user->id]);
            }
        });
    }
}
