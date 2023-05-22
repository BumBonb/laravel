<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    public function __invoke()
    {
        $genres = Genre::all();
        $books = Book::all();
        return view('admin.book.index', compact('books', 'genres'));
    }
}
