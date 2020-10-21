<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\payment::class, function (Faker $faker) {
    return [

        'PaymentDate' =>  $faker->word,
        'CheckNum' =>  $faker->word,
        'Amount' =>  $faker->numberBetween(0,19)
    ];
});
