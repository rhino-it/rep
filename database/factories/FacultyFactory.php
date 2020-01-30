<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Faculty;
use Faker\Generator as Faker;


$factory->define(Faculty::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'i18n' => $faker->randomElement(['ru','en','kg']),
        'site_link' => $faker->word,
    ];
});
