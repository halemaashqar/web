<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\product::class, function (Faker $faker) {
    return [
        'code' => $faker->randomNumber(4),
        'Name' =>$faker->name,
        'vendor' => $faker->word,
        'PdtDescription' => $faker->word,
        'QtyInStock' => $faker->randomNumber(6),
        'BuyPrice' => $faker->numberBetween(0,19),
        'Scale' => $faker->randomNumber(4),
        'MSRP' => $faker->word,
        'ProductLineID'=>null
    ];
});
