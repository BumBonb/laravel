<?php

namespace App\Http\Controllers\Main\Book;

use App\Enums\BookType;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    protected $casts = [
        'type' => BookType::class,
    ];
    public function __invoke()
    {

        $genres = Genre::all();
        $books = Book::all();
        return view('main.book.index', compact('books', 'genres'));
    }
}
