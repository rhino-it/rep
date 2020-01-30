<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostFile;
use Faker\Generator as Faker;

$factory->define(PostFile::class, function (Faker $faker) {
    return [
        //
        'files_link_id' => factory(App\FileLink::class),
        'page_id' => factory(App\Page::class),
    ];
});
