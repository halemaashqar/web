<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\orderProduct::class, function (Faker $faker) {
    return [
        'ID' => $faker->randomNumber(4),
        'Qty' =>$faker->randomNumber(6),
        'PriceEach' =>$faker->numberBetween(0,19)
    ];
});
