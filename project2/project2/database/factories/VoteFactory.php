<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vote;
use Faker\Generator as Faker;

$factory->define(Vote::class, function (Faker $faker) { 
    
    $up = $faker->randomElement([true,false]);
    $down = ! $up;
    $userIds = App\User::pluck('id')->toArray();
        //

    return [
        'up' => $up ? 1 : Null,
        'down' => $down ? 1 : Null,
        'user_id' => function () use ( $faker, $userIds) {
            return $faker->randomElement($userIds);
        },
    ];
    
});
