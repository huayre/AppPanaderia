<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Color::class, function (Faker $faker) {
    return [
        'name'=>$faker->colorName,
        'article_id'=>rand(1,3000)
    ];
});
