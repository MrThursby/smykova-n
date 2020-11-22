<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Media\ImageModel as Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'author_id' => 1,
        'description' => 'Фото временно отсутствует',
        'src' => '93e668c53b149e16512aacf8ad114e43',
        'original_src' => '93e668c53b149e16512aacf8ad114e43.png',
        'cover_src' => '93e668c53b149e16512aacf8ad114e43'
    ];
});
