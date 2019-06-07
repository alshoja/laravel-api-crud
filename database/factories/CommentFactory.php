<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) use ($factory) {
    return [
        'comments' => $faker->text,
        'post_id' => $factory->create(App\Post::class)->id,
    ];
});
