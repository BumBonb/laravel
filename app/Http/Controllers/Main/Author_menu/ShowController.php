<?php

namespace App\Http\Controllers\Main\Author_menu;

use App\Models\Book;
use Illuminate\Support\Facades\File;

class ShowController extends BaseController
{
    public function __invoke(Book $book)
    {
        $filePath = storage_path('app/public/' . $book->bookFile);
        $fileContents = File::get($filePath);
        return view('main.book.show', compact('book', 'fileContents'));
    }
}
