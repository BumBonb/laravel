<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;

class EditController extends BaseController
{
    public function __invoke(Book $book)
    {
        $genres = Genre::all();
        return view('admin.book.edit', compact('book', 'genres'));

    }
}
