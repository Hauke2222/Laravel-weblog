<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

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
        return [
            //
            'title' => 'Blog title',
            'date' => '2020-08-04',
            'author' => Str::random(5),
            'page_content' => Str::random(75),
            'premium_content_status' => false,
            'user_id' => \App\Models\User::all()->random()->id,
            //'image' => $this->faker->imageUrl($width = 200, $height = 200),
            //'image' => UploadedFile::fake()->image('avatar.jpg', 100, 100)->size(100),
            //'image' => Storage::disk('local')->get('database\seeders\seedimages\winter-in-finland.jpg'),
            $contents = file_get_contents('https://source.unsplash.com/random', true),
            'image' => Storage::put('file.jpg', $contents),

        ];
    }
}
