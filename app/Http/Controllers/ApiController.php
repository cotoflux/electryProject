<?php

namespace App\Http\Controllers;

use App\Util\Post;


class ApiController extends Controller
{
	protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;

    }

    public function index()
    {
        $posts = $this->post->all();
        return view('someviewglobal', compact('posts'));
    }

    public function show($id)
    {

       	$post = $this->post->findById($id);      
    	return view('someview', compact('post'));
    }

}