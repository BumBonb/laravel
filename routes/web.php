<?php

use App\Http\Controllers\Admin\Genre\CreateController;
use App\Http\Controllers\Admin\Genre\GenreController;
use App\Http\Controllers\Admin\Genre\StoreController;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\Genre\ShowController;
use App\Http\Controllers\Admin\Genre\EditController;
use App\Http\Controllers\Admin\Genre\UpdateController;
use App\Http\Controllers\Admin\Genre\DeleteController;
use App\Http\Controllers\Main\IndexController;
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
    Route::get('/', [IndexController::class, '__invoke']);
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Admin\Main'], function () {
        Route::get('/', [AdminController::class, '__invoke']);
    });
    Route::group(['namespace' => 'Admin\Genre', 'prefix' => 'genre'], function () {
        Route::get('/', [GenreController::class, '__invoke'])->name('admin.genre');
        Route::get('/create', [CreateController::class, '__invoke'])->name('admin.genre.create');
        Route::post('/', [StoreController::class, '__invoke'])->name('admin.genre.store');
        Route::get('/{genre}', [ShowController::class, '__invoke'])->name('admin.genre.show');
        Route::get('/{genre}/edit', [EditController::class, '__invoke'])->name('admin.genre.edit');
        Route::patch('/{genre}', [UpdateController::class, '__invoke'])->name('admin.genre.update');
        Route::delete('/{genre}', [DeleteController::class, '__invoke'])->name('admin.genre.delete');
    });
});

Auth::routes();
