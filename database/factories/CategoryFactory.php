<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement(array(
            'Mobile Phones and Tables',
            'Computers',
            'Consumer Electronics',
            'Pets and Animals',
            'Home and Furniture',
            'Beauty Health and Grocery',
            'Clothing and Accesories',
            'Books, Sports and Hobbies',
            'Baby Stuff and Toys',
            'Real Estate',
            'Cars and Automotives',
            'Motorcycles and Scooters',
            'Services',
            'Jobs',
            'Business and Earning Oppurtunities',
            'Construction and Farming',
            'Heavy Machinery and Trucks'
        )),
    ];
});
