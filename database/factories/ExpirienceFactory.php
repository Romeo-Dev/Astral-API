<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Expirience;
use Faker\Generator as Faker;

$factory->define(Expirience::class, function (Faker $faker) {
    return [
        'ruolo' => $faker->jobTitle,
        'azienda' => $faker->company,
        'descrizione' => $faker->text(350),
        'start' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'end' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'profile_id' => $faker->numberBetween(1, App\Models\Profile::count()),
    ];
});
