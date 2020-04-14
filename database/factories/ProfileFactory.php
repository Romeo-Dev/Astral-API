<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'nome' => $faker->firstName,
        'cognome' => $faker->lastName,
        'descrizione' => $faker->paragraph,
        'img' => $faker->imageUrl(320 , 460,),
        'email' => $faker->unique()->freeEmail,
        'indirizzo' => $faker->address,
        'tel' => $faker->phoneNumber,
        'professione' => $faker->jobTitle,
        'git' => $faker->url,
        'skype' => $faker->url,
        'facebook' => $faker->url,
        'instagram' => $faker->url,
    ];
});
