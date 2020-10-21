<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\order::class, function (Faker $faker) {
    return [
        'ID' => $faker->randomNumber(4),
        'OtderData' =>$faker->word,
        'RequiredDate' => $faker->word,
        'ShippedDate' => $faker->word,
        'Status' => $faker->randomNumber(5),
        'comments' => $faker->word
    ];
});
