<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Departments;
use Faker\Generator as Faker;

$factory->define(Departments::class, function (Faker $faker) {

    return [
        'department_name' => $faker->word,
        'university_id' => $faker->word,
        'user_id' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
