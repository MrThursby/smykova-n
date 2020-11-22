<?php

use Illuminate\Database\Seeder;
use App\Models\SectionModel;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SectionModel::class, 5)->create();
    }
}
