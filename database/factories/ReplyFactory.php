<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Question;
use App\Models\Reply;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'question_id' => function () {
            return Question::all()->random();
        },
        'user_id' => function () {
            return \App\User::all()->random();
        }
    ];
});
