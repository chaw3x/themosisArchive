<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Listado;
use Faker\Generator as Faker;

$factory->define(Listado::class, function (Faker $faker) {
    return [
        'rut' => $faker->Str::random(5),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,

    ];
});
