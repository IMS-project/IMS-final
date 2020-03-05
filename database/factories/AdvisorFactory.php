<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Advisor;
use Faker\Generator as Faker;

$factory->define(Advisor::class, function (Faker $faker) {

    return [
        'user_id' => $faker->word,
        'university_id' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
