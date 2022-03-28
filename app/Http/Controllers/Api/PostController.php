<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{


    public function index(){
        //$posts=Post::all();

        $posts=Post::with(["category","tags"])->get();

        return response()->json($posts);
    }

    
    public function show($slug){
        //$posts=Post::all();

        $post=Post::where("slug",$slug);
        return response()->json($posts);
    }

}
