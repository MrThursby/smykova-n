<?php

/** @var Factory $factory */

use App\Models\Media\VideoModel as Model;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Model::class, function (Faker $faker) {
    $use_iframe = rand(0,1);
    $iframe = '<iframe src="https://vk.com/video_ext.php?oid=-182058587&id=456239074&hash=3ce8eb3fa52e0f52" width="640" height="360" frameborder="0" allowfullscreen></iframe>';
    $src = '93e668c53b149e16512aacf8ad114e43';
    return [
        'author_id' => 1,
        'headline' => $faker->sentence(rand(5,10)),
        'description' => $faker->sentences(rand(5,10), true),
        'use_iframe' => $use_iframe,
        'iframe' => $use_iframe == 1 ? $iframe : '',
        '1080_src' => $use_iframe == 1 ? '' : $src,
        '720_src' => $use_iframe == 1 ? '' : $src,
        '480_src' => $use_iframe == 1 ? '' : $src,
        '360_src' => $use_iframe == 1 ? '' : $src,
        '240_src' => $use_iframe == 1 ? '' : $src,
        '144_src' => $use_iframe == 1 ? '' : $src,
        'cover_original_src' => $src.'.png',
        'cover_src' => $src,
        'min_cover_src' => $src
    ];
});
