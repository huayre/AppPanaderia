<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'model'=>$faker->text(10),
        'subcategory_id'=>rand(1,20),
        'gender'=>$faker->randomElement($array=['masculino','femenino','unisex']),
        'description'=>$faker->text(300),
        'price'=>rand(10,200)

    ];
});
