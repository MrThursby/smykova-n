<?php

namespace App\Models\Media;

use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'videos';
    protected $fillable = [
        'author_id',
        'headline', 'description',
        'use_iframe', 'iframe',
        '1080_src', '720_src', '480_src', '360_src', '240_src', '144_src',
        'cover_original_src', 'cover_src', 'min_cover_src'
    ];
}
