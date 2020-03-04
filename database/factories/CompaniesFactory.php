<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Companies;
use Faker\Generator as Faker;

$factory->define(Companies::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'address' => $faker->word,
        'offer_capacity' => $faker->word,
        'field_of_study' => $faker->word,
        'min_grade' => $faker->randomDigitNotNull,
        'student_benefit' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
