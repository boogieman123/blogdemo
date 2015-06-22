<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\Repositories\BlogRepository;

class BlogController extends Controller
{

    /**
     * The BlogRepository instance.
     *
     * @var App\Repositories\BlogRepository
     */
    protected $blogRepository;

    /**
     * The pagination number.
     *
     * @var int
     */
    protected $nbrPages;

    /**
     * Create a new BlogController instance.
     *
     * @param  App\Repositories\BlogRepository $blogRepository
     * @return void
    */
    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
        $this->nbrPages = 3;

        $this->middleware('admin', ['only' => ['create','edit','update','destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //return view('blog.index');
        $posts = $this->blogRepository->indexFront($this->nbrPages);        
        $links = str_replace('/?', '?', $posts->render());

        return view('blog.index', compact('posts', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }    

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\PostRequest $request
     * @return Response
     */
    public function store(PostRequest $request)
    {
        $this->blogRepository->store($request->all(), $request->user()->id);
        return redirect()->back()->with('postStored', 'Post stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  Illuminate\Contracts\Auth\Guard $auth     
     * @param  string $slug
     * @return Response
     */
    public function show(Guard $auth, $slug)
    {
        $user = $auth->user();
        return view('blog.show',  array_merge($this->blogRepository->show($slug), compact('user')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.blog.edit', array_merge($this->blogRepository->edit($id), compact('user')));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  App\Http\Requests\PostUpdateRequest $request
     * @param  int  $id
     * @return Response
     */
    public function update(PostRequest $request, $id)
    {
        $this->blogRepository->update($request->all(), $id, $request->user()->id);
        return redirect()->back()->with('postStored', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->blogRepository->destroy($id);
        return redirect('blog')->with('status', 'Post removed');              
    }
}
