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
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Book::factory(10)->create();
        \App\Models\Comment::factory(10)->create();
        \App\Models\Review::factory(10)->create();
        \App\Models\Tag::factory(10)->create();
        \App\Models\Quote::factory(10)->create();
    }
}