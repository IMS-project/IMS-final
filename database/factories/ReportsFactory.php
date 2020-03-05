<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Reports;
use Faker\Generator as Faker;

$factory->define(Reports::class, function (Faker $faker) {

    return [
        'student_id' => $faker->word,
        'advisor_id' => $faker->word,
        'supervisor_id' => $faker->word,
        'text' => $faker->word,
        'evaluation' => $faker->randomDigitNotNull,
        'attachment' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
