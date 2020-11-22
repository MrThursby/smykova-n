<?php

use Illuminate\Database\Seeder;
use App\Models\SettingModel;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SettingModel::class)->create();
    }
}
