<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'category_id' => function(){
            return Category::all()->random();
        },
        'name' => $faker->word,
        'description' => $faker->paragraph,
        'price' => $faker->numberBetween(100,1000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2,30)
    ];
});
