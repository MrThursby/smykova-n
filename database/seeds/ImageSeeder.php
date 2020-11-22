<?php

use Illuminate\Database\Seeder;
use App\Models\Media\ImageModel;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ImageModel::class)->create();
    }
}
