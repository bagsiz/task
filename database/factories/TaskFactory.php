<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2, true),
        'description' => $faker->text,
        'status' => 1,
        'user_id' => factory('App\User')->create()->id,
    ];
});
