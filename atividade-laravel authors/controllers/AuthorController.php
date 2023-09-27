<?php

namespace App\Http\Controllers;

use App\Models\author;
use Illuminate\Http\Request;

class authorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('authors.index', ['authors' => author::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        author::create($request->all());
        return redirect(route('authors.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(author $author)
    {
        return view('authors.show', ['author'=>$author]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(author $author)
    {
        return view('authors.edit',['author'=>$author]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, author $author)
    {
        $author->update($request->all());
        return redirect(route('authors.show', $author->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(author $author)
    {
        $author->delete();
        return redirect(route('authors.index'));
    }
}