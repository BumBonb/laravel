<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'books';
    protected $fillable = ['title', 'description', 'cover', 'bookFile', 'user_id'];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genres', 'book_id', 'genre_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
