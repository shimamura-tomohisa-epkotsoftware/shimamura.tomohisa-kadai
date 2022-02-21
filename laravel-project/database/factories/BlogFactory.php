<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Blog;
use Faker\Generator as Faker;

$factory->define(App\Models\Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->realText
    ];
});
