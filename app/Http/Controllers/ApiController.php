<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Support\Jsonable;


use Illuminate\Http\Request;
use App\Util\Post;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;

class ApiController extends Controller
{
	protected $post;

    public function __construct(Post $post)
    {
    	$this->post = $post;
    }

    public function index()
    {
    	// Get all the post
        $posts = $this->post->all();
        //dd($posts);
    	return view('someviewglobal', compact('posts'));
    }

    public function show($id)
    {
    	$post = $this->post->findById($id);

    	return view('someview', compact('post'));
    }


    public function paginate($items, $perPage = 5, $page = null)
        {
        $pageName = 'page';
        $page     = $page ?: (Paginator::resolveCurrentPage($pageName) ?: 1);
        $items    = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator(
        $items->forPage($page, $perPage)->values(),
        $items->count(),
        $perPage,
        $page,
        [
        'path'     => Paginator::resolveCurrentPath(),
        'pageName' => $pageName,
        ]
    );
    }
}