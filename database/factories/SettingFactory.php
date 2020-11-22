<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SettingModel as Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'author_id' => 1,
        'main_menu' => 1,
        'site_name'=> 'Наталия Смыкова',
        'headline' => 'Наталия Смыкова',
        'sub_headline' => 'Блог учителя-дефектолога',
    ];
});
