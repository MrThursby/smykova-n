<?php


namespace App\Repositories\Posts;

use App\Models\Posts\Articles\ArticleModel;
use App\Models\Posts\Articles\ArticleModel as Model;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;


class PostRepository
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
     * @return LengthAwarePaginator
     */
    public function getAllBySection($section_id, $perPage = 20) {
        /**
         * @param string $type
         * @param array|string|false $absentColumns
         * @return string
         */
        function columns($type, $absentColumns = false){
            $collection = collect([
                'id', 'author_id', 'cover_id', 'section_id',
                'headline', 'excerpt',
                "'$type' as `type`", 'created_at'
            ]);
            if($absentColumns){
                if(is_array($absentColumns)){
                    foreach ($absentColumns as $column){
                        $collection[$collection->search($column)] = "0 as $column";
                    }
                } else {
                    $collection[$collection->search($absentColumns)] = "0 as $absentColumns";
                }
            }
            return $collection->implode(', ');
        }
        $where = 'section_id = 4';
        $types = ['carousel', 'presentation', 'videopost'];
        $absentColumns = [
            'carousel' => 'excerpt',
            'presentation' => 'excerpt',
            'videopost' => 'excerpt',
        ];
        $posts = DB::table('articles')->selectRaw(columns('article'));
        foreach ($types as $type)$posts
            ->union(
                DB::table($type.'s')
                    ->selectRaw(columns($type, $absentColumns[$type]))
                    ->whereRaw($where)
            );
        return $posts->whereRaw($where)->orderBy('created_at')->paginate();
    }

    /**
     * Получить список постов для вывода пагинатором
     *
     * @param int|null $perPage
     * @param int|null $section_id
     *
     * @return Collection
     */
    public function getLast($count) {
        /**
         * @param string $type
         * @param array|string|false $absentColumns
         * @return string
         */
        function columns($type, $absentColumns = false){
            $collection = collect([
                'id', 'author_id', 'cover_id', 'section_id',
                'headline', 'excerpt', 'published_at',
                "'$type' as `type`", 'created_at'
            ]);
            if($absentColumns){
                if(is_array($absentColumns)){
                    foreach ($absentColumns as $column){
                        $collection[$collection->search($column)] = "0 as $column";
                    }
                } else {
                    $collection[$collection->search($absentColumns)] = "0 as $absentColumns";
                }
            }
            return $collection->implode(', ');
        }
        $where = 'section_id != 0';
        $types = ['carousel', 'presentation', 'videopost'];
        $orderBy = '`published_at` DESC';
        $absentColumns = [
            'carousel' => 'excerpt',
            'presentation' => 'excerpt',
            'videopost' => 'excerpt',
        ];
        $posts = ArticleModel::selectRaw(columns('article'));
        foreach ($types as $type)$posts
            ->union(
                DB::table($type.'s')
                    ->selectRaw(columns($type, $absentColumns[$type]))
                    ->orderByRaw($orderBy)
                    ->whereRaw($where)
            );
        return $posts->whereRaw($where)
            ->orderByRaw($orderBy)
            ->with(['section:id,name,slug', 'cover:id,src,cover_src'])
            ->limit($count)->get();
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
