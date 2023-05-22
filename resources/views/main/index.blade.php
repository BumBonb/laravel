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
            <table class="table table-hover text-nowrap">
                <tbody class="text-center">
                <tr class="border-top" onclick="window.location='/genre'" style="cursor: pointer">
                    <td>Жанры</td>
                </tr>
                <tr onclick="window.location='/author'" style="cursor: pointer">
                    <td>Авторы</td>
                </tr>
                <tr onclick="window.location='/book'" style="cursor: pointer">
                    <td>Книги</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
