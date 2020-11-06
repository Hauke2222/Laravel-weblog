<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Blog;

class BlogItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Blog::create([
            'title' => 'A blog title 1',
            'date' => '2020-11-04',
            'author' => Str::random(5),
            'page_content' => Str::random(75),
            'premium_content_status' => false,
            'comments' => Str::random(20),
            'user_id' => \App\Models\User::all()->random()->id,
        ]);
        Blog::create([
            'title' => 'B blog title 2',
            'date' => '2020-11-04',
            'author' => Str::random(5),
            'page_content' => Str::random(75),
            'premium_content_status' => false,
            'comments' => Str::random(20),
            'user_id' => \App\Models\User::all()->random()->id,
        ]);
        Blog::create([
            'title' => 'C blog title 3',
            'date' => '2020-10-04',
            'author' => Str::random(5),
            'page_content' => Str::random(75),
            'premium_content_status' => false,
            'comments' => Str::random(20),
            'user_id' => \App\Models\User::all()->random()->id,
        ]);
    }
}
