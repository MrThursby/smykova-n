<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Posts\Carousels\CarouselModel as Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $headline = $faker->sentence(6);
    return [
        'author_id' => 1,
        'section_id' => rand(1, 5),
        'cover_id' => 1,
        'keywords' => $faker->words(10, true),
        'slug' => Str::slug($headline),
        'headline' => $headline,
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
