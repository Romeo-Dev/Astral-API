<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'nome' => $faker->sentence(3),
        'descrizione' => $faker->text(500),
        'profile_id' => $faker->numberBetween(1, App\Models\Profile::count()),
        'tec_id' => $faker->numberBetween(1, App\Models\Tecnology::count())
    ];
});
