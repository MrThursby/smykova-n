<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sections';
    protected $fillable = [
        'name', 'slug'
    ];

}
