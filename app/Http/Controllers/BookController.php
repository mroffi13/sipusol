<?php

namespace App\Http\Controllers;

use App\Models\{Book, Bookshelf, Category};
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.books.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $bookshelves = Bookshelf::get();
        $categories = Category::get();
        return view('backend.books.create', compact('bookshelves', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'       => 'required',
            'category_id' => 'required',
            'bookshelves' => 'required',
            'author'      => 'required',
            'publisher'   => 'required',
            'year'        => 'required',
            'isbn'        => 'required',
            'stock'       => 'required',
        ]);

        $attr = $request->all();
        $attr['slug'] = Str::slug(request('title'));

        $book = Book::create($attr);
        $book->bookshelves()->attach(request('bookshelves'));

        return redirect()->route('books')->with([
            'class' => 'success',
            'message' => 'Buku berhasil ditambah!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
        $book->bookshelves()->detach();
        $book->delete();
        return back()->with([
            'class' => 'success',
            'message' => 'The book has been deleted!'
        ]);
    }
}
