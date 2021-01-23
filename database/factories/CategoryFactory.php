<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $word = $faker->text;
    return [
        'name' => $word,
        'slug' => str_slug($word)
    ];
});
