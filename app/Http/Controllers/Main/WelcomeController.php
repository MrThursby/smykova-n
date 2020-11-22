<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Posts\Articles\ArticleModel;
use App\Models\Posts\Carousels\CarouselModel;
use App\Models\Posts\Presentations\PresentationModel;
use App\Models\Posts\Videoposts\VideopostModel;
use App\Repositories\Menus\MenuItemRepository;
use App\Repositories\Menus\MenuRepository;
use App\Repositories\Posts\PostRepository;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * @var PostRepository
     */
    private $posts;
    /**
     * @var MenuRepository
     */
    private $menu;
    public function __construct()
    {
        $this->posts = app(PostRepository::class);
        $this->menu = app(MenuRepository::class);
    }

    public function index() {
        $posts = $this->posts->getLast(6);
        return view('main.welcome', compact('posts'));
    }
}
