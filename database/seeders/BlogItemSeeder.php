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
        $blog = Blog::factory()->count(3)->make();
        //
/*         Blog::create([
            'title' => 'Blog title A',
            'date' => '2020-08-04',
            'author' => Str::random(5),
            'page_content' => Str::random(75),
            'premium_content_status' => false,
            'user_id' => \App\Models\User::all()->random()->id,
            'image' => 'https://source.unsplash.com/random',
        ]);
        Blog::create([
            'title' => 'Blog title B',
            'date' => '2020-11-04',
            'author' => Str::random(5),
            'page_content' => Str::random(75),
            'premium_content_status' => false,
            'user_id' => \App\Models\User::all()->random()->id,
            'image' => 'https://source.unsplash.com/random',
        ]);
        Blog::create([
            'title' => 'Blog title C',
            'date' => '2020-12-04',
            'author' => Str::random(5),
            'page_content' => Str::random(75),
            'premium_content_status' => false,
            'user_id' => \App\Models\User::all()->random()->id,
            'image' => 'https://source.unsplash.com/random',
        ]); */
    }
}
