<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Period;
use Faker\Generator as Faker;

$factory->define(Period::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
