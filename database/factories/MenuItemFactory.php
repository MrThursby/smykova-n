<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Menus\MenuItemModel as Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $name = $faker->word();
    return [
        'menu_id' => 1,
        'name' => $faker->word(),
        'src' => Str::slug($name).rand(1,500),
    ];
});
