<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Students;
use Faker\Generator as Faker;

$factory->define(Students::class, function (Faker $faker) {

    return [
        'user_id' => $faker->word,
        'university_id' => $faker->word,
        'company_id' => $faker->word,
        'advisor_id' => $faker->word,
        'supervisor_id' => $faker->word,
        'year' => $faker->word,
        'department_id' => $faker->word,
        'grade' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
