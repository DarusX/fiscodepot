<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product' => $faker->sentence(),
        'description' => $faker->text(),
        'price' => $faker->randomFloat()
    ];
});
