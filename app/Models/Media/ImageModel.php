<?php

namespace App\Models\Media;

use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'images';
    protected $fillable = [
        'author_id', 'description',
        'src', 'original_src', 'cover_src'
    ];
    public function cover() {
        return asset('storage/uploads/images/cov/'.$this->cover_src.'.jpg');
    }
}
