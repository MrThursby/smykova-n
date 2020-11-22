<?php

use Illuminate\Database\Seeder;
use App\Models\Posts\Articles\ArticleModel;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ArticleModel::class, 500)->create();
    }
}
