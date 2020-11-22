<?php

namespace App\Models;

use App\Models\Menus\MenuModel;
use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings';
    protected $fillable = [
        'author_id',
        'site_name', 'headline', 'sub_headline',
        'main_menu',
    ];
    public function menu() {
        return $this
            ->belongsTo(MenuModel::class, 'main_menu', 'id');
    }
}
