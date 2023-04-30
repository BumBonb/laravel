@extends('layouts.main')

@section('title', 'Главная страница')

@section('content')
    <div class="home_main">
        <div class="find-all">
            <form class="search-find-all" method="get" action="">
                <input type="tel" id="s" name="s" placeholder="Поиск" class="h-100 w-100 border mb-3">
            </form>
        </div>

        <div class="wrapper_main">
            <div class="genre_main">
                <a href="/genre">Жанры</a>
            </div>
            <div class="author_main">
                <a href="/author">Авторы</a>
            </div>
            <div class="books_main">
                <a href="/books">Книги</a>
            </div>
        </div>
    </div>
@endsection
