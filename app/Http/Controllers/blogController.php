<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(){

    	$posts = Post::simplePaginate(3);

    	 return view('index',['posts'=> $posts]);
    }

    public function show($slug)
    {

    	$post = Post::where('slug',$slug)->first();
    	return view('show',['post'=>$post]);
    }
}
 