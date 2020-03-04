<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Chats;
use Faker\Generator as Faker;

$factory->define(Chats::class, function (Faker $faker) {

    return [
        'sender_id' => $faker->word,
        'reciever_id' => $faker->word,
        'body' => $faker->text,
        'date' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
