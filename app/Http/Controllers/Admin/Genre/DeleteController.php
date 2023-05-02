<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Genre\UpdateRequest;
use App\Models\Genre;


class DeleteController extends Controller
{
    public function __invoke(Genre $genre)
    {

        $genre->delete();
        return redirect()->route('admin.genre');
    }
}
