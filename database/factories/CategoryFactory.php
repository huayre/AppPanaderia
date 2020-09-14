<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->text(10),
        'description'=>$faker->text(500),
        'state'=>rand(0,1)
    ];
});
