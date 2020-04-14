<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Argoment;
use Faker\Generator as Faker;

$factory->define(Argoment::class, function (Faker $faker) {
    return [
        'tag' => $faker->sentence(2),
        'sh_descr' => $faker->text(200),
        'edu_id' => $faker->numberBetween(1, App\Models\Education::count()),
    ];
});
