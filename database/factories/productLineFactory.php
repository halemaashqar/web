<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\productLine::class, function (Faker $faker) {
    return [
        'Id' => $faker->randomNumber(4),
        'DescInText' => $faker->word,
        'DescInHTML' => $faker->word,
        'Image' => $faker->word,
    ];
});
