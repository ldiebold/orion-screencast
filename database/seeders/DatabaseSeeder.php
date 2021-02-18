<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::factory()->create();

        \App\Models\Post::factory(3)->for($user)->create(['category' => 'Laravel Orion']);
        \App\Models\Post::factory(3)->for($user)->create(['category' => 'Laravel Tips']);
        \App\Models\Post::factory(3)->for($user)->create(['category' => 'Vue Tips']);
        \App\Models\Post::factory(3)->for($user)->create(['category' => 'Coding Architecture']);
        \App\Models\Post::factory(3)->for($user)->create(['category' => 'Coding In The Mind']);
    }
}
