<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Parents;
use Faker\Generator as Faker;

$factory->define(Parents::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' =>  $faker->lastName,
        'email' =>  $faker->safeEmail,
        'phone' =>  $faker->phoneNumber,
        'address'   =>  $faker->address,
        'student_id'   => function(){
            return App\Student::all()->random();
        }
    ];
});