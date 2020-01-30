<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        //
        'lang' => $faker->word,
        'content' => $faker->text,
        'published' => $faker->randomDigit,
        'viewed' => $faker->randomDigit,
        'user_id' => factory(App\User::class),
        'faculty_id' => factory(App\Faculty::class),
    ];
});
