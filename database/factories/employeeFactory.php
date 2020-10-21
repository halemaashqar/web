<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Emmployee::class, function (Faker $faker) {
    return [
        'ID' => $faker->randomNumber(4),
        'LastName' => $faker->name,
        'FirstName' => $faker->name,
        'Extension' => $faker->name,
        'Email' => $faker->email,
        'reportsTo' => $faker->randomNumber(5),
        'JobTitle' => $faker->jobTitle,
    ];
});
