@extends('layouts.main')
@section('title', $book->title)
@section('content')
    <table class="table table-hover text-nowrap">
        <thead>
        <tr>
            <th><a class="text-decoration-none text-black" href="{{ route('main.book.index') }}">назад</a></th>

            <td colspan="2" class="text-center fs-2">{{ $book->title }}</td>
        </tr>
        </thead>
        <tbody>
            <tr onclick="window.location='{{ route('main.author.show', $book->author->id) }}'" style="cursor: pointer">
                <th></th>
                <th>Автор</th>
                <td class="" >{{ $book->author->name }}</td>
            </tr>
            <tr>
                <th></th>
                <th>Дата публикации</th>
                <td class="">{{ $book->created_at }}</td>
            </tr>
            <tr>
                <th></th>
                <th>Описание</th>
                <td class="text-wrap">{{ $book->description }}</td>
            </tr>
            <tr>
                <th></th>
                <td colspan="2" class="text-center fs-4">Текст книги</td>
            </tr>
        </tbody>
    </table>
    <div class="ms-3 me-3">
        <p>{{ $fileContents }}</p>
    </div>
@endsection


