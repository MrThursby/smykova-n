<?php

use Illuminate\Database\Seeder;
use App\Models\Menus\MenuItemModel;
use Illuminate\Support\Str;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'menu_id' => 1,
                'name' => 'Игротека',
                'src' => Str::slug('Игротека')
            ],
            [
                'menu_id' => 1,
                'name' => 'Полезное',
                'src' => Str::slug('Полезные статьи')
            ],
            [
                'menu_id' => 1,
                'name' => 'Материалы занятий',
                'src' => Str::slug('Конспекты занятий')
            ],
        ];
        factory(MenuItemModel::class)->createMany($data);
    }
}
