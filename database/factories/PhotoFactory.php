<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Photo::class, function (Faker $faker) {
    return [
        'color_id'=>rand(1,6000),
        'url'=>$faker->imageUrl('200','150')
    ];
});
