<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Subcomments;
use Faker\Generator as Faker;

$factory->define(Subcomments::class, function (Faker $faker) use($factory) {
    return [
        'sub_comments' => $faker->text,
        'comment_id' => $factory->create(App\Comment::class)->id,
    ];
});
