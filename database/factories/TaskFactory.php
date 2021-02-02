<?php

declare(strict_types=1);

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'complete' => false,
    ];
});