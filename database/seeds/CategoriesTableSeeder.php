<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('discipline');
        $categoriesArray = $data['categories'];

        foreach ($categoriesArray as $currentCategory) {
            
            $category = new Category();
            $category->name = $currentCategory['name'];
            $category->discipline = $currentCategory['discipline'];
            $category->genre = $currentCategory['genre'];

            $category->save();
        }
    }
}
