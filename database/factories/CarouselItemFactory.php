<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Posts\Carousels\CarouselItemModel as Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'carousel_id' => 1,
        'image_id' => 1,
        'headline' => $faker->sentence(rand(4, 6)),
        'description' => $faker->sentence(rand(10,20))
    ];
});
