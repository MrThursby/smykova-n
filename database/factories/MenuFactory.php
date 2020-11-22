<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Menus\MenuModel as Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $name = $faker->word();
    return [
        'name' => $name,
        'slug' => Str::slug($name),
    ];
});
