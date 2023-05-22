<?php

namespace App\Http\Controllers\Main\Genre;

use App\Http\Controllers\Controller;
use App\Models\Genre;

class GenreController extends Controller
{
    public function __invoke()
    {
        $genres = Genre::all();
        return view('main.genre.index', compact('genres'));
    }
}
