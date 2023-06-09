<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Http\Controllers\Controller;
use App\Models\Genre;

class GenreController extends Controller
{
    public function __invoke()
    {
        $genres = Genre::all();
        return view('admin.genre.index', compact('genres'));
    }
}
