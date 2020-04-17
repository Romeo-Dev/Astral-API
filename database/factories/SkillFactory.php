<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Skill;
use Faker\Generator as Faker;

$factory->define(Skill::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'progress' => 'fas fa-check-double',
        'ability_id' => $faker->numberBetween(1, App\Models\Ability::count()),
    ];
});
