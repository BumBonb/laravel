<?php

namespace App\Http\Controllers\Main\Genre;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;

class ShowController extends Controller
{
    public function __invoke(Genre $genre, Book $book)
    {
        $genre = Genre::find($genre->id);
        return view('main.genre.show', compact('genre'));
    }


}
