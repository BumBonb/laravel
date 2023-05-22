<?php

namespace App\Http\Controllers\Main\Author_menu;

use App\Models\Book;


class DeleteController extends BaseController
{
    public function __invoke(Book $book)
    {

        $book->delete();
        return redirect()->route('author');
    }
}
