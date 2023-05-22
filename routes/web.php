<?php

use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\Genre\GenreController;
use App\Http\Controllers\Admin\Genre\StoreController as GenreStoreController;
use App\Http\Controllers\Admin\Genre\ShowController as GenreShowController;
use App\Http\Controllers\Admin\Genre\EditController as GenreEditController;
use App\Http\Controllers\Admin\Genre\UpdateController as GenreUpdateController;
use App\Http\Controllers\Admin\Genre\DeleteController as GenreDeleteController;
use App\Http\Controllers\Admin\Book\BookController;
use App\Http\Controllers\Admin\Book\StoreController as BookStoreController;
use App\Http\Controllers\Admin\Book\ShowController as BookShowController;
use App\Http\Controllers\Admin\Book\EditController as BookEditController;
use App\Http\Controllers\Admin\Book\UpdateController as BookUpdateController;
use App\Http\Controllers\Admin\Book\DeleteController as BookDeleteController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\User\StoreController as UserStoreController;
use App\Http\Controllers\Admin\User\ShowController as UserShowController;
use App\Http\Controllers\Admin\User\EditController as UserEditController;
use App\Http\Controllers\Admin\User\UpdateController as UserUpdateController;
use App\Http\Controllers\Admin\User\DeleteController as UserDeleteController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Main\Genre\GenreController as MainGenreController;
use App\Http\Controllers\Main\Genre\ShowController as MainGenreShowController;
use App\Http\Controllers\Main\Author\UserController as MainAuthorController;
use App\Http\Controllers\Main\Author\ShowController as MainAuthorShowController;
use App\Http\Controllers\Main\Book\BookController as MainBookController;
use App\Http\Controllers\Main\Author_menu\ShowController as MainBookShowController;
use App\Http\Controllers\Main\Author_menu\EditController as MainBookEditController;
use App\Http\Controllers\Main\Author_menu\UpdateController as MainBookUpdateController;
use App\Http\Controllers\Main\Author_menu\DeleteController as MainBookDeleteController;
use App\Http\Controllers\Main\Author_menu\StoreController as MainBookStoreController;
use App\Http\Controllers\Main\Author_menu\AuthorController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [IndexController::class, '__invoke'])->name('main.index');
    Route::get('/genre', [MainGenreController::class, '__invoke'])->name('main.genre.index');
    Route::get('/genre/{genre}', [MainGenreShowController::class, '__invoke'])->name('main.genre.show');
    Route::get('/author', [MainAuthorController::class, '__invoke'])->name('main.author.index');
    Route::get('/author/{author}', [MainAuthorShowController::class, '__invoke'])->name('main.author.show');
    Route::get('/book', [MainBookController::class, '__invoke'])->name('main.book.index');
    Route::get('/book/{book}', [MainBookShowController::class, '__invoke'])->name('main.book.show');
    Route::get('/{book}/edit', [MainBookEditController::class, '__invoke'])->name('main.book.edit');
    Route::patch('/{book}', [MainBookUpdateController::class, '__invoke'])->name('main.book.update');
    Route::delete('/{book}', [MainBookDeleteController::class, '__invoke'])->name('main.book.delete');
    Route::post('/', [MainBookStoreController::class, '__invoke'])->name('main.book.store');
});
Route::group(['namespace' => 'Author_menu', 'prefix' => 'author_menu', 'middleware' => ['auth',]], function () {
    Route::group(['namespace' => 'Main/Author_menu'], function () {
        Route::get('/', [AuthorController::class, '__invoke'])->name('author.menu');

    });

});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['namespace' => 'Admin\Main'], function () {
        Route::get('/', [AdminController::class, '__invoke']);
    });

    Route::group(['namespace' => 'Admin\Book', 'prefix' => 'book'], function () {
        Route::get('/', [BookController::class, '__invoke'])->name('admin.book');
        Route::post('/', [BookStoreController::class, '__invoke'])->name('admin.book.store');
        Route::get('/{book}', [BookShowController::class, '__invoke'])->name('admin.book.show');
        Route::get('/{book}/edit', [BookEditController::class, '__invoke'])->name('admin.book.edit');
        Route::patch('/{book}', [BookUpdateController::class, '__invoke'])->name('admin.book.update');
        Route::delete('/{book}', [BookDeleteController::class, '__invoke'])->name('admin.book.delete');
    });

    Route::group(['namespace' => 'Admin\Genre', 'prefix' => 'genre'], function () {
        Route::get('/', [GenreController::class, '__invoke'])->name('admin.genre');
        Route::post('/', [GenreStoreController::class, '__invoke'])->name('admin.genre.store');
        Route::get('/{genre}', [GenreShowController::class, '__invoke'])->name('admin.genre.show');
        Route::get('/{genre}/edit', [GenreEditController::class, '__invoke'])->name('admin.genre.edit');
        Route::patch('/{genre}', [GenreUpdateController::class, '__invoke'])->name('admin.genre.update');
        Route::delete('/{genre}', [GenreDeleteController::class, '__invoke'])->name('admin.genre.delete');
    });
    Route::group(['namespace' => 'Admin\User', 'prefix' => 'user'], function () {
        Route::get('/', [UserController::class, '__invoke'])->name('admin.user');
        Route::post('/', [UserStoreController::class, '__invoke'])->name('admin.user.store');
        Route::get('/{user}', [UserShowController::class, '__invoke'])->name('admin.user.show');
        Route::get('/{user}/edit', [UserEditController::class, '__invoke'])->name('admin.user.edit');
        Route::patch('/{user}', [UserUpdateController::class, '__invoke'])->name('admin.user.update');
        Route::delete('/{user}', [UserDeleteController::class, '__invoke'])->name('admin.user.delete');
    });
});

Auth::routes();
