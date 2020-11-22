<?php


namespace App\Repositories\Menus;

use App\Models\Menus\MenuModel as Model;
use App\Repositories\BaseRepository;

class MenuRepository extends BaseRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }
    public function getById($id) {
        return $this->startConditions()->find($id);
    }
}
