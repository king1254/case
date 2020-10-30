<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\clients;
use Faker\Generator as Faker;

$factory->define(clients::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'division_id' => $faker->randomDigitNotNull,
        'district_id' => $faker->randomDigitNotNull,
        'mobile' => $faker->word,
        'email' => $faker->word,
        'gender' => $faker->word,
        'address' => $faker->text,
        'description' => $faker->text,
        'file' => $faker->word,
        'date' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
