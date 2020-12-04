<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
           'name' => 'Natuur'
        ]);
        Category::create([
            'name' => 'Sport'
         ]);
        Category::create([
            'name' => 'Economie'
         ]);
        Category::create([
            'name' => 'Nieuws'
         ]);
        Category::create([
            'name' => 'Technologie'
         ]);
        Category::create([
            'name' => 'Cultuur'
         ]);

    }
}
