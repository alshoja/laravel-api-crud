<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) use ($factory) {
    return [
        'posts' => $faker->text,
        'user_id' => $factory->create(App\User::class)->id,
    ];
});
