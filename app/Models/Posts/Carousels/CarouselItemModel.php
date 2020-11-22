<?php

namespace App\Models\Posts\Carousels;

use Illuminate\Database\Eloquent\Model;

class CarouselItemModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'carousel_items';
    protected $fillable = [
        'carousel_id', 'image_id',
        'headline', 'description'
    ];
    public function carousel() {
        return $this->belongsTo(CarouselModel::class, 'carousel_id');
    }
}
