<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Laptop', 'Clothe', 'Shoe', 'Watch', 'Mobile Phone'];

        foreach($categories as $category){
            Category::create([
                'name' => $category,
                'slug' => str_slug($category),
            ]);
        }
    }
}
