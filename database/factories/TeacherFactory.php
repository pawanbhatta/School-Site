<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' =>  $faker->lastName,
        'email' =>  $faker->safeEmail,
        'phone' =>  $faker->phoneNumber,
        'address'   =>  $faker->address,
        'position'  =>  $faker->word,
        'joined_date'   =>  $faker->date($format = 'Y-m-d', $max = 'now'),
        'teacher_profile'   =>  $faker->imageUrl($width = 640, $height = 480),
        'class_id'   => function(){
            return App\Classes::all()->random();
        }
    ];
});