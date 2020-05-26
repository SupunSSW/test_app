<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Users::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstname,
        'lname' => $faker->lastname,
        'email' => $faker->email
    ];
});
