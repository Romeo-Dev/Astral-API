<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ability;
use Faker\Generator as Faker;

$factory->define(Ability::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'icon' => 'fas fa-atlas'
    ];
});
