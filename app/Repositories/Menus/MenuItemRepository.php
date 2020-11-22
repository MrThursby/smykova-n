<?php


namespace App\Repositories\Menus;

use App\Models\SettingModel as Model;
use App\Repositories\BaseRepository;

class MenuItemRepository extends BaseRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }
    public function get() {
        return $this->startConditions()->orderBy('id', 'DESC')->first();
    }
}
