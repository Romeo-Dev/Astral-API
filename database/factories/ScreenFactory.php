<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Screen;
use Faker\Generator as Faker;

$factory->define(Screen::class, function (Faker $faker) {
    return [
        'pathTo' => $faker->imageUrl(300, 400),
        'project_id' => $faker->numberBetween(1, App\Models\Project::count()),
    ];
});
