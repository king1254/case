<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\divisions;
use Faker\Generator as Faker;

$factory->define(divisions::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'bn_name' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
