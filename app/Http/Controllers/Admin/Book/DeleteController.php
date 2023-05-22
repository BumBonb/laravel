<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Book\UpdateRequest;
use App\Models\Book;


class DeleteController extends BaseController
{
    public function __invoke(Book $book)
    {

        $book->delete();
        return redirect()->route('admin.book');
    }
}
