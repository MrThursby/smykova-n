<?php

namespace App\Models\Menus;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menus';
    protected $fillable = [
        'name', 'slug'
    ];
    public function items() {
        return $this->hasMany(MenuItemModel::class, 'menu_id');
    }
}
