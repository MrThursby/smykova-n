<?php

namespace App\Models\Posts\Carousels;

use Illuminate\Database\Eloquent\Model;

class CarouselModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'carousels';
    protected $fillable = [
        'author_id', 'section_id', 'cover_id',
        'keywords',
        'headline', 'slug',
        'is_published', 'published_at'
    ];
    public function items() {
        return $this->hasMany(CarouselItemModel::class, 'carousel_id');
    }
}
