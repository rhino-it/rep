<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostCategory;
use Faker\Generator as Faker;

$factory->define(PostCategory::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'i18n' => $faker->randomElement('ru','en','kg'),
        'key' => $faker->word,
    ];
});
