<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Model\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'website' => $faker->text,
        'email' => $faker->email,
    ];
});
