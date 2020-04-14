<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Mansion;
use Faker\Generator as Faker;

$factory->define(Mansion::class, function (Faker $faker) {
    return [
        'mansione' => $faker->jobTitle,
        'sh_desc' => $faker->text(255),
        'exp_id' => $faker->numberBetween(1, App\Models\Expirience::count()),
    ];
});
