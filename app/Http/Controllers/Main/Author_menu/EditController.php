<?php

namespace App\Http\Controllers\Main\Author_menu;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;

class EditController extends BaseController
{
    public function __invoke(Book $book)
    {
        $genres = Genre::all();
        return view('main.author_menu.edit', compact('book', 'genres'));

    }
}
