<?php

namespace App\Http\Controllers\Main\Author;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Book;
class ShowController extends Controller
{
    public function __invoke(User $author, Book $book)
    {

        $user = User::find($author->id);
        
        return view('main.author.show', compact('user', 'book'));
    }
}
