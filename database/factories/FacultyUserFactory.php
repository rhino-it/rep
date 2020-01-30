<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FacultyUser;
use Faker\Generator as Faker;

$factory->define(FacultyUser::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'user_id' => factory(App\User::class),
        'faculty_id' => factory(App\Faculty::class),
    ];
});
