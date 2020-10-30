<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Districts;
use Faker\Generator as Faker;

$factory->define(Districts::class, function (Faker $faker) {

    return [
        'division_id' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'bn_name' => $faker->word,
        'lat' => $faker->randomDigitNotNull,
        'lon' => $faker->randomDigitNotNull,
        'website' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
