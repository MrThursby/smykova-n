<?php

namespace App\Models\Posts\Articles;

use App\Models\Media\ImageModel;
use App\Models\SectionModel;
use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';
    protected $dates = ['published_at'];
    protected $fillable = [
        'author_id', 'section_id', 'cover_id', 'keywords', 'slug',
        'headline', 'content', 'excerpt'
    ];

    public function section() {
        return $this->belongsTo(SectionModel::class);
    }

    public function hasCover() {
        return $this->cover_id != null;
    }

    public function cover() {
        return $this->belongsTo(ImageModel::class, 'cover_id');
    }
    public function publishedAt() {
        return $this->published_at->format('d M, Y');
    }
}
