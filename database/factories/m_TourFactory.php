<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\m_Tour;
use App\m_Collection;
use Faker\Generator as Faker;

$factory->define(m_Tour::class, function (Faker $faker) {
    return [
        'tour_title'  => $faker->sentence(10),
        'tour_comment' => $faker->sentence(20),
        'm__collection_id' => factory(m_Collection::class)->create(),
        'tour_level' => rand(1,100)

    ];
});
