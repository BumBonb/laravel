@extends('layouts.main')
@section('title', 'Список книг автора ' . $user->name)
@section('content')
    <table class="table table-hover text-nowrap">
        <thead>
        <tr>
            <th colspan="1"><a class="text-decoration-none text-black" href="{{ route('main.author.index') }}">назад</a></th>
            <th colspan="3" class="text-center fs-2">{{ $user->name }}</th>
        </tr>
        <tr class="text-center">
            <th></th>
            <th>№</th>
            <th>Название</th>
            <th>Жанры</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user->books as $book)
            <tr class="text-center" onclick="window.location='{{ route('main.book.show', $book->id) }}'" style="cursor: pointer">
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $book->title }}</td>
                <td>
                    @foreach($book->genres as $genre)
                        {{ $genre->title }}
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection


