<?php

use Illuminate\Database\Seeder;
use App\Models\Posts\Videoposts\VideopostModel;

class VideopostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(VideopostModel::class, 500)->create();
    }
}
