<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $contents = file_get_contents('https://images.pexels.com/photos/2331569/pexels-photo-2331569.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        Storage::put('public/images/file.jpg', $contents);

        return [
            //
            'title' => 'Blog title',
            'date' => '2020-08-04',
            'author' => 'Auteur',
            'page_content' => Str::random(75),
            'premium_content_status' => false,
            'user_id' => \App\Models\User::all()->random()->id,
            'image' => 'public/images/file.jpg',

        ];
    }
}
