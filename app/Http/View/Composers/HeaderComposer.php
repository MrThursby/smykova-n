<?php

namespace App\Http\View\Composers;

use App\Repositories\Menus\MenuRepository;
use App\Repositories\SettingRepository;
use Cassandra\Set;
use Illuminate\View\View;

class HeaderComposer
{
    /**
     * The setting repository implementation.
     *
     * @var SettingRepository
     */
    protected $settings;
    /**
     * The menu repository implementation.
     *
     * @var MenuRepository
     */
    protected $menu;

    /**
     * Create a new profile composer.
     *
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->settings = app(SettingRepository::class);
        $this->menu = app(MenuRepository::class);
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('mainMenu', $this->menu->getById(1)->items()->get());
    }
}
