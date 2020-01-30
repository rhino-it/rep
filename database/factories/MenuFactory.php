<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'key' => $faker->word,
        'i18n' => $faker->randomElement('ru','en','kg'),
        'menu_type' => $faker->word,
        'parent_id' => factory(App\Menu::class),
        'page_id' => factory(App\Page::class),
    ];
});
