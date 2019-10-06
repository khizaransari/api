<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail'  => $faker->word,
        'price'  => $faker->numberBetween(1,999),
        'stock'  => $faker->randomDigit(),
        'discount' => $faker->numberBetween(0,100),
    ];
});
