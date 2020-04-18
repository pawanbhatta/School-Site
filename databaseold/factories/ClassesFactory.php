<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Classes;
use Faker\Generator as Faker;

$factory->define(Classes::class, function (Faker $faker) {
    return [
        'number'    =>  $faker->numberBetween(1, 10),
        'num_of_std'    =>  $faker->numberBetween(30, 100),
        'num_of_sub'    =>  $faker->numberBetween(5, 9),
    ];
});