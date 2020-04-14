<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Education;
use Faker\Generator as Faker;

$factory->define(Education::class, function (Faker $faker) {
    return [
        'qualifica' => $faker->jobTitle,
        'descrizione' => $faker->paragraph,
        'luogo' => $faker->country,
        'graduation' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'profile_id' => $faker->numberBetween(1, App\Models\Profile::count()),
    ];
});
