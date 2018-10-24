<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'title'     => $faker->sentence(2, true),
        'priority'  => array_rand(['low' => 'low', 'medium' => 'medium', 'high' => 'high'], 1),
        'user_id'   => 1
    ];
});
