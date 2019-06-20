<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'type_id' => factory(App\Type::class),
        'period_id' => factory(App\Period::class),
        'video_link' => null
    ];
});
