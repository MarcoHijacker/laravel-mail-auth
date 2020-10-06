<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [

      'item'          => $faker -> word(),
      'price'         => $faker -> randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
      'brand'         => $faker -> word(),
      'category'      => $faker -> sentence($nbWords = 3, $variableNbWords = true),
      'fastdelivery'  => $faker -> boolean($chanceOfGettingTrue = 20)

    ];
});
