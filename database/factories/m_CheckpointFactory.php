<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\m_Checkpoint;
use App\m_Collection;
use Faker\Generator as Faker;
use App\m_Tour;

$factory->define(m_Checkpoint::class, function (Faker $faker) {
    static $distance = 0;
    return [
        'm__tour_id' => factory(m_Tour::class)->create(),
        'checkpoint_title' => $faker->sentence(5),
        'checkpoint_category' => $faker->randomElement(['start' ,'intermediate', 'spot', 'endpoint']),
        'distance' => $distance+20,
        'comments' => $faker->sentence(20),
        'prefectures' => $faker->country,
        'm__collection_id' => factory(m_Collection::class)->create()



        
    ];
});
