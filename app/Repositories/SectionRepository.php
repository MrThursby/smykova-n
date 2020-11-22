<?php


namespace App\Repositories;


use App\Models\SectionModel as Model;

class SectionRepository extends BaseRepository
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
    public function getBySlug($slug) {
        return $this->startConditions()->where('slug', $slug)->get()->first();
    }
}
