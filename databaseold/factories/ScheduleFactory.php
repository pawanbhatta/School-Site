<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Schedule;
use Faker\Generator as Faker;

$factory->define(Schedule::class, function (Faker $faker) {
    return [
        'start_time'    =>  $faker->time($format = 'H:i:s', $max = 'now'),
        'end_time'    =>  $faker->time($format = 'H:i:s', $max = 'now'),
    ];
});