<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->freeEmail,
        'subject' => $faker->sentence(6),
        'content' => $faker->text(500),
        'profile_id' => $faker->numberBetween(1, App\Models\Profile::count()),
    ];
});
