<?php

namespace App\Http\Controllers\Main\Author_menu;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function __invoke()
    {
        $genres = Genre::all();
        $books = Book::all();
        $user = Auth::user();
        return view('main.author_menu.index', compact('user', 'books', 'genres' ));
    }
}
