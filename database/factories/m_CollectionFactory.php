<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\m_Collection;
use Faker\Generator as Faker;

$factory->define(m_Collection::class, function (Faker $faker) {
    return [
        'collection_category' => $faker->randomElement(['tour' ,'checkpoint']),
        'collection_title' => $faker->sentence(10),
        'path'  => $faker->unique()->sentence(5),
        'filename' => $faker->sentence(5)


    ];
});
