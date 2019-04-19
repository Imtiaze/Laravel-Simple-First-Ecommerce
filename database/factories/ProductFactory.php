<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
use App\Models\Product;

$factory->define(Product::class, function (Faker $faker) {
    
    $name = substr($faker->text, 0, 60);
    
    return [
        'category_id' => rand(1, 5),
        'name'        => $name,
        'slug'        => str_slug($name),
        'description' => $faker->text,
        'quantity'    => rand(1, 10),
        'price'       => rand(1, 5000),
        'created_at'  => Carbon::now(),
        'updated_at'  => Carbon::now(),
    ];
});
