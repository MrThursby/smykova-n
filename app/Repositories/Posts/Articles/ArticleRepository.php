<?php


namespace App\Repositories\Posts\Articles;

use App\Models\Posts\Articles\ArticleModel as Model;
use Illuminate\Pagination\Paginator;


class ArticleRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }
    /**
     * Получить список постов для вывода пагинатором
     *
     * @param int|null $perPage
     * @param int|null $section_id
     *
     * @return Paginator
     */
    public function getAllBySection($section_id, $perPage = 20) {
        $columns = [
            'section_id',
            'author_id',
            'cover_id',
            'headline',
            'excerpt'
        ];
        $result = $this->startConditions()
            ->select($columns)
            ->where('is_published', true)
            ->where('section_id', $section_id)
            ->orderBy('id', 'DESC')
            ->with('section:id,slug', 'author:id,firstname,lastname,nickname')
            ->paginate($perPage);
        return $result;
    }
    /**
     * Получить список постов для вывода пагинатором
     *
     * @param int|null $perPage
     * @param int|null $author_id
     *
     * @return Paginator
     */
    public function getAllByAuthor($author_id, $perPage = 20) {
        $columns = [
            'section_id',
            'author_id',
            'cover_id',
            'headline',
            'excerpt'
        ];
        $result = $this->startConditions()
            ->select($columns)
            ->where('is_published', true)
            ->where('author_id', $author_id)
            ->orderBy('id', 'DESC')
            ->with('section:id,slug', 'author:id,firstname,lastname,nickname')
            ->paginate($perPage);
        return $result;
    }
}
