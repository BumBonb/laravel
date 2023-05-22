<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;

class ShowController extends BaseController
{
    public function __invoke(Book $book)
    {

        return view('admin.book.show', compact('book'));
    }
}
