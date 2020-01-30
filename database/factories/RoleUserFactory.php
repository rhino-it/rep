<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RoleUser;
use Faker\Generator as Faker;

$factory->define(RoleUser::class, function (Faker $faker) {
    return [
        //
        'role_id' => factory(App\Role::class),
        'user_id' => factory(App\User::class),
    ];
});
