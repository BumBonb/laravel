@extends('layouts.main')
@section('title', 'Список книг по жанру ' . $genre->title )
@section('content')
            <table class="table table-hover text-nowrap m-0">
                <thead>
                <tr  class="text-center" >
                    <th colspan="1"><a class="text-decoration-none text-black" href="{{ route('main.genre.index') }}">назад</a></th>
                    <th colspan="5" class="fs-2" >{{ $genre->title }}</th>
                </tr>
                <tr class="text-center">
                    <th></th>
                    <th>№</th>
                    <th>Название</th>
                    <th>Автор</th>
                    <th>Жанры</th>
                    <th>Дата публикации</th>
                </tr>
                </thead>
                <tbody>
                @foreach($genre->books as $book)
                    <tr class="text-center" onclick="window.location='{{ route('main.book.show', $book->id) }}'" style="cursor: pointer">
                        <td></td>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author->name }}</td>
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


