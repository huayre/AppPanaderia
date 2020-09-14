<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Subcategory::class, function (Faker $faker) {
    return [
        'name'=>$faker->text(10),
        'category_id'=>rand(1,8),
        'state'=>rand(0,1)
    ];
});
