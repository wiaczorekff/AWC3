<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index', ['books' => book::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        book::create($request->all());
        return redirect(route('books.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
       return view('books.show', ['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        return view('books.edit',['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book $book)
    {
        $book->update($request->all());
        return redirect(route('books.show', $book->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        $book->delete();
        return redirect(route('books.index'));
    }
}