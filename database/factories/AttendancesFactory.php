<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Attendances;
use Faker\Generator as Faker;

$factory->define(Attendances::class, function (Faker $faker) {

    return [
        'student_id' => $faker->word,
        'advisor_id' => $faker->word,
        'supervisor_id' => $faker->word,
        'date' => $faker->word,
        'status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
