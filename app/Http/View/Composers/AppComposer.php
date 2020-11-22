<?php

namespace App\Http\View\Composers;

use App\Repositories\SettingRepository;
use Illuminate\View\View;

class AppComposer
{
    /**
     * The user repository implementation.
     *
     * @var SettingRepository
     */
    protected $settings;

    /**
     * Create a new profile composer.
     *
     * @param  SettingRepository  $settings
     * @return void
     */
    public function __construct(SettingRepository $settings)
    {
        // Dependencies automatically resolved by service container...
        $this->settings = $settings;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('settings', $this->settings->get());
    }
}
