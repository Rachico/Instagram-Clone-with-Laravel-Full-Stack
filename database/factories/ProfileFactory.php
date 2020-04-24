<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'title' =>$faker->title,
        'description'=>$faker->streetAddress,
        'url' => $faker->url,

    ];
});
