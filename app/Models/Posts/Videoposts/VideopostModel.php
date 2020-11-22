<?php

namespace App\Models\Posts\Videoposts;

use Illuminate\Database\Eloquent\Model;

class VideopostModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'videoposts';
    protected $fillable = [
        'author_id', 'section_id', 'cover_id', 'video_id',
        'slug', 'headline', 'keywords', 'description',
        'is_published', 'published_at'
    ];
    protected $dates = ['published_at'];
}
