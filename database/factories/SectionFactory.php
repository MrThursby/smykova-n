<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SectionModel as Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Model::class, function (Faker $faker) {
    $word = $faker->word();
    return [
        'name' => $word,
        'slug' => Str::slug($word).rand(1,500),
    ];
});
