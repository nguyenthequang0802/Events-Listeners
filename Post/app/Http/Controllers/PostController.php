<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Providers\ViewedPosstEvent;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('post.index', ['posts' => $posts]);
    }
    public function show($id){
        $post = Post::find($id);
        ViewedPosstEvent::dispatch($post);
        return view('post.show',['post'=>$post]);
    }
}
