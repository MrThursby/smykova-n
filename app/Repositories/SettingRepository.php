<?php


namespace App\Repositories;

use App\Models\SettingModel as Model;

class SettingRepository extends BaseRepository
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
