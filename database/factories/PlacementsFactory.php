<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Placements;
use Faker\Generator as Faker;

$factory->define(Placements::class, function (Faker $faker) {

    return [
        'student_id' => $faker->word,
        'company_id' => $faker->word,
        'university_id' => $faker->word,
        'work_area' => $faker->word,
        'start_date' => $faker->word,
        'end_date' => $faker->word,
        'number_of_days' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
