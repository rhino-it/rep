<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'lang' => $faker->word,
        'content' => $faker->text,
        'published' => $faker->randomDigit,
        'published_date' => $faker->dateTime,
        'viewed' => $faker->randomDigit,
        'user_id' => factory(App\User::class),
        'post_category_id' => factory(App\PostCategory::class),
    ];
});
