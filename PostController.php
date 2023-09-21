<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index', ['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('posts.create', 
            ['categories' => Category::all(), 'tags' => Tag::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $post = Post::create($request->all());
    
        if (isset($request['tags'])) {
            //Use o attach para adicionar as tags associadas
            $post->tags()->attach($request['tags']);
        }
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', ['posts'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post){
        return view('posts.edit', 
                   ['post' => $post, 'categories' => Category::all(), 
                    'tags' => Tag::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post){
        $post->update($request->all());
    
        if (isset($request['tags'])) {
            //Use sync para atualizar as tags associadas
            $post->tags()->sync($request['tags']); 
        } else {
            //Remova todas as tags associadas
            $post->tags()->detach(); 
        }    
        return redirect(route('posts.show', $post->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('posts.index'));
    }
}
