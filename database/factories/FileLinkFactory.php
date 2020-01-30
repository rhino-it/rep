<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FileLink;
use Faker\Generator as Faker;

$factory->define(FileLink::class, function (Faker $faker) {
    return [
        //
        'link' => $faker->name,
        'storage_type' => $faker->randomElement('local', 'external'),
        'file_type' => $faker->fileExtension,
    ];
});
