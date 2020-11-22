<?php

use Illuminate\Database\Seeder;
use App\Models\Media\VideoModel;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(VideoModel::class, 5)->create();
    }
}
