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
            'title' => 'Blog title A',
            'date' => '2020-08-04',
            'author' => Str::random(5),
            'page_content' => Str::random(75),
            'premium_content_status' => false,
            'user_id' => \App\Models\User::all()->random()->id,
            'image' => 'database\seeders\seedimages\winter-in-finland.jpg',
        ]);
        Blog::create([
            'title' => 'Blog title B',
            'date' => '2020-11-04',
            'author' => Str::random(5),
            'page_content' => Str::random(75),
            'premium_content_status' => false,
            'user_id' => \App\Models\User::all()->random()->id,
            'image' => 'database\seeders\seedimages\Finnish-Lapland.jpg',
        ]);
        Blog::create([
            'title' => 'Blog title C',
            'date' => '2020-12-04',
            'author' => Str::random(5),
            'page_content' => Str::random(75),
            'premium_content_status' => false,
            'user_id' => \App\Models\User::all()->random()->id,
            'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.M52Pcr8OmGtStOzd3N41bQHaE7%26pid%3DApi&f=1',
        ]);
    }
}
