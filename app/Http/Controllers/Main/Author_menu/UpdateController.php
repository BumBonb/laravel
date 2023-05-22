<?php

namespace App\Http\Controllers\Main\Author_menu;

use App\Http\Requests\Main\Author_menu\UpdateRequest;
use App\Models\Book;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Book $book)
    {
        $data = $request->validated();
        $book = $this->service->update($data, $book);

        return view('main.book.show', compact('book'));
    }
}
