<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Requests\Admin\Book\UpdateRequest;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;



class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Book $book)
    {

        $data = $request->validated();
        $book = $this->service->update($data, $book);

        return view('admin.book.show', compact('book'));
    }
}
