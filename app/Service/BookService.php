<?php

namespace App\Service;

use App\Models\Book;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BookService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();

            $genreIds = $data['genre_ids'];
            unset($data['genre_ids']);

            $data['cover'] = Storage::disk('public')->put('/cover_images', $data['cover']);
            $data['bookFile'] = Storage::disk('public')->put('/book_file', $data['bookFile']);
            $data['user_id'] = Auth::id();
            $book = Book::firstOrCreate($data);
            $book->genres()->attach($genreIds);
            DB::commit();

        } catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $book)
    {
        try {
            DB::beginTransaction();

            $genreIds = $data['genre_ids'];
            unset($data['genre_ids']);

            if( array_key_exists('cover', $data)) {
                $data['cover'] = Storage::disk('public')->put('/cover_images', $data['cover']);
            }
            if( array_key_exists('bookFile', $data)) {
                $data['bookFile'] = Storage::disk('public')->put('/book_file', $data['bookFile']);
            }

            $book->update($data);
            $book->genres()->sync($genreIds);

            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $book;
    }
}
