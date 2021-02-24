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
         function createCategories() {
            $categories = array(
                'Natuur',
                'Sport',
                'Economie',
                'Nieuws',
                'Technologie',
                'Cultuur'
             );

             foreach($categories as $category) {
                Category::create(['name' => $category]);
             }
         }
         createCategories();

    }
}
