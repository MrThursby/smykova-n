<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Posts\Videoposts\VideopostModel as Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $headline = $faker->sentence(rand(5, 10));
    return [
        'author_id' => 1,
        'section_id' => rand(1,5),
        'cover_id' => 1,
        'video_id' => rand(1,5),
        'slug' => Str::slug($headline),
        'headline' => $headline,
        'keywords' => $faker->words(10, true),
        'description' => $faker->sentences(rand(5, 10), true),
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
