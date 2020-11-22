<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Posts\Presentations\PresentationModel as Model;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Model::class, function (Faker $faker) {
    $headline = $faker->sentence(rand(5, 10));
    $use_iframe = rand(0, 1);
    $iframe = '<iframe src="https://onedrive.live.com/embed?resid=A0584A178ABFECA0%21712&amp;authkey=%21AMCQ3KoxhfadTuM&amp;em=2&amp;wdAr=1.7777777777777777" width="350px" height="221px" frameborder="0">Это внедренный файл <a target="_blank" href="https://office.com">Microsoft Office</a> на платформе <a target="_blank" href="https://office.com/webapps">Office</a>.</iframe>';
    return [
        'author_id' => 1,
        'section_id' => rand(1,5),
        'cover_id' => 1,
        'slug' => Str::slug($headline),
        'headline' => $headline,
        'description' => $faker->sentences(50, true),
        'use_iframe' => $use_iframe,
        'src' => $use_iframe == 1 ? '' : '93e668c53b149e16512aacf8ad114e43.pptx',
        'iframe' => $use_iframe == 1 ? $iframe : '',
        'is_published' => 1,
        'published_at' => Carbon::now()
            ->subMonths(rand(1,2))
            ->subDays(rand(1,28))
            ->subHours(rand(1,24))
            ->subMinutes(rand(1,59))
            ->subSeconds(rand(1,59)),
        'created_at' => Carbon::now()
            ->subMonths(rand(3,4))
            ->subDays(rand(1,28))
            ->subHours(rand(1,24))
            ->subMinutes(rand(1,59))
            ->subSeconds(rand(1,59))
    ];
});
