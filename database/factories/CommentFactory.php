<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id'   =>  mt_rand(1, $GLOBALS['userCount']),
        'tweet_id'   =>  mt_rand(1, $GLOBALS['tweetCount']),
        'body'      =>  $faker->realText(mt_rand(10, 60))
    ];
});
