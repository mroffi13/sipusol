<?php

namespace App\Http\Livewire;

use App\Models\Book as ModelsBook;
use Livewire\Component;

class Book extends Component
{
    public $title, $category, $bookshelf, $cover, $isbn, $author, $publisher, $year, $stock;

    public function render()
    {
        $books = ModelsBook::paginate(5);
        return view('livewire.book', compact('books'));
    }

    public function show($id)
    {
        $book = ModelsBook::where('id', $id)->first();
        $this->title = $book->title;
        $this->category = $book->category->name;
        $this->cover = $book->cover;
        $this->isbn = $book->isbn;
        $this->author = $book->author;
        $this->bookshelf = $book->bookshelf->name;
        $this->publisher = $book->publisher;
        $this->year = $book->year;
        $this->stock = $book->stock;
    }
}
