@extends('layouts.main')
@section('title', 'Список книг')
@section('content')
    <table class="table table-hover text-nowrap">
        <thead>
        <tr>
            <th colspan="1"><a class="text-decoration-none text-black" href="{{ route('main.index') }}">назад</a></th>
            <th colspan="5" class="text-center fs-2">Книги</th>
        </tr>
        <tr class="text-center">
            <th></th>
            <th>№</th>
            <th>Автор</th>
            <th>Название</th>
            <th>Жанр</th>
            <th>Дата публикации</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr class="text-center" onclick="window.location='{{ route('main.book.show', $book->id) }}'" style="cursor: pointer">
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $book->author->name }}</td>
                <td>{{ $book->title }}</td>
                <td>
                    @foreach($book->genres as $genre)
                        {{ $genre->title }}
                    @endforeach
                </td>
                <td>{{ $book->created_at->format('d m y') }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


