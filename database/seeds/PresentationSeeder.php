<?php

use Illuminate\Database\Seeder;
use App\Models\Posts\Presentations\PresentationModel;

class PresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PresentationModel::class, 500)->create();
    }
}
