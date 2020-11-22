<?php

use Illuminate\Database\Seeder;
use App\Models\Menus\MenuModel;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MenuModel::class)->create();
    }
}
