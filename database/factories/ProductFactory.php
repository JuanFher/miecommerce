<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'slug' => $faker->word,
        'category_id' => $faker->numberBetween($min = 1, $max = 10),
        'quantity' => $faker->numberBetween($min = 1, $max = 10),
        'actual_price' => $faker->numberBetween($min = 1, $max = 100),
        'previous_price'=> $faker->numberBetween($min = 101, $max = 200),
        'short_description' => $faker->sentence,
        'large_description' => $faker->text($maxNbChars = 500),
        'specifications' => $faker->sentence,
        'data_of_interest' => $faker->sentence,
        'percentaje_desc' => $faker->numberBetween($min = 1, $max = 10),
        'visits' => $faker->numberBetween($min = 1, $max = 20),
        'sales' => $faker->numberBetween($min = 1, $max = 20),
        'status' => 'new',
        'active' => 'si',
        'slider_principal'=> 'no'
    ];
});

