<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Label;

$factory->define(Label::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
