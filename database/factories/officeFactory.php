<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\office::class, function (Faker $faker) {
    return [
        'code' => $faker->randomNumber(4),
        'Phone' =>  $faker->phoneNumber,
        'Address1' =>  $faker->address,
        'Address2' =>  $faker->address,
        'State' => $faker->state,
        'City' =>  $faker->city,
        'PostalCode' => $faker->randomNumber(4),
        'Country' =>  $faker->country,
        'Territory' =>  $faker->word,
    ];
});
