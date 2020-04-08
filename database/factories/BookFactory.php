<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
        'author' => $faker->name,
        'page_count' => $faker->numberBetween(100, 500),
    ];
});
