<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use App\User;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'point' => 100,
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
    ];
});
