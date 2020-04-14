<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tecnology;
use Faker\Generator as Faker;

$factory->define(Tecnology::class, function (Faker $faker) {
    return [
        'nome' => $faker->word,
        'type' => $faker->word,
        'logo' => 'fas fa-folder-plus'
    ];
});
