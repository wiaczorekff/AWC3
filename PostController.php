<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $newPost = new Post();
        $newPost->title = $request->title;
        $newPost->content = $request->content;
        $newPost->save();
    }
}
