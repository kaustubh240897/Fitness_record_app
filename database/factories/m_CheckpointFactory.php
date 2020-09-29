<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\m_Checkpoint;
use Faker\Generator as Faker;

$factory->define(m_Checkpoint::class, function (Faker $faker) {
    return [
        'm__tour_id' => factory(m_Tour::class)->create,
        'checkpoint_title' => $faker->sentence(5),
        'checkpoint_category' => $faker->randomElement(['start' ,'intermediate', 'spot', 'endpoint']),
        
    ];
});
