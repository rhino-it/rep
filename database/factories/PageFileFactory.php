<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PageFile;
use Faker\Generator as Faker;

$factory->define(PageFile::class, function (Faker $faker) {
    return [
        //
        'page_id' => factory(App\Page::class),
        'files_link_id' => factory(App\FileLink::class),
    ];
});
