<?php

namespace App\Http\Controllers\Main\Sections;

use App\Http\Controllers\Controller;
use App\Repositories\Posts\PostRepository;
use App\Repositories\SectionRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SectionController extends Controller
{
    /**
     * The user repository implementation.
     *
     * @var PostRepository
     */
    protected $posts;
    /**
     * The user repository implementation.
     *
     * @var SectionRepository
     */
    protected $sections;
    /**
     * Create a new profile composer.
     *
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->sections = app(SectionRepository::class);
        $this->posts = app(PostRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @param string $slug
     *
     * @return View
     */
    public function index($slug)
    {
        $section = $this->sections->getBySlug($slug);
        if($section == null)abort(404);
        $posts = $this->posts->getAllBySection($section->id);
        return view('main.sections.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
