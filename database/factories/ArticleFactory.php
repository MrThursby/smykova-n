<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Posts\Articles\ArticleModel as Model;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Model::class, function (Faker $faker) {
    $headline = $faker->sentence(5);
    $content = $faker->realText(1000);
    return [
        'author_id' => 1,
        'section_id' => rand(1, 5),
        'cover_id' => 1 == rand(1,2) ? 1 : null,
        'keywords' => $faker->words(10, true),
        'slug' => Str::slug($headline),
        'headline' => $headline,
        'content' => $content,
        'excerpt' => Str::limit($content, 300),
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
