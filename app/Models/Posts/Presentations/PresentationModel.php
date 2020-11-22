<?php

namespace App\Models\Posts\Presentations;

use Illuminate\Database\Eloquent\Model;

class PresentationModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'presentations';
    protected $fillable = [
        'author_id', 'section_id', 'cover_id',
        'slug', 'headline', 'description',
        'use_iframe', 'src', 'iframe',
        'is_published', 'published_at'
    ];
}
