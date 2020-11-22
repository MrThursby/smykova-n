<?php

namespace App\Models\Menus;

use Illuminate\Database\Eloquent\Model;

class MenuItemModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menu_items';
    protected $fillable = [
        'menu_id', 'name', 'src'
    ];
}
