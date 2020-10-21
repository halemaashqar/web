<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\customer::class, function (Faker $faker) {
    return [

        'ID' => $faker->randomNumber(4),
        'Name' => $faker->name,
        'LastName' => $faker->name,
        'FirstName' => $faker->name,
        'Phone' => $faker->phoneNumber,
        'Address1' => $faker->address,
        'Address2' => $faker->address,
        'State' => $faker->state,
        'City' => $faker->city,
        'PostalCode' =>$faker->randomNumber(5),
        'Country' => $faker->country,
        'CreaditLimit' => $faker->randomNumber(6)
    ];
});
