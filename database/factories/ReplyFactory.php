<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Reply::class, function (Faker $faker) {

    //get random time within one month
    $time = $faker->dateTimeThisMonth();

    return [
        // 'name' => $faker->name,
        'content' => $faker->sentence(),
        'created_at' => $time,
        'updated_at' => $time,
    ];
});
