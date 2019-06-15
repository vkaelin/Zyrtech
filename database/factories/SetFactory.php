<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Set;
use Faker\Generator as Faker;

$factory->define(Set::class, function (Faker $faker) {
    return [
        'code' => str_random(10),
    ];
});
