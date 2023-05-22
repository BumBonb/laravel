@extends('layouts.main')
@section('title', 'Список жанров')
@section('content')
            <table class="table table-hover text-nowrap m-0">
                <thead>
                <tr>
                    <th class=" mt-4 border-0 d-flex position-absolute"><a class="text-decoration-none text-black" href="{{ route('main.index') }}">назад</a></th>
                </tr>
                <tr>
                    <th colspan="3" class="text-center fs-2">Жанры</th>
                </tr>
                </thead>
                <tbody>
                @foreach($genres as $genre)
                    <tr onclick="window.location='{{ route('main.genre.show', $genre->id) }}'" style="cursor: pointer">
                        <td colspan="3" class="text-center">{{ $genre->title }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
@endsection


