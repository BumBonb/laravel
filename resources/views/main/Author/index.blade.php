@extends('layouts.main')
@section('title', 'Список авторов')
@section('content')
    <table class="table table-hover text-nowrap">
        <thead>
        <tr>
            <th colspan="1"><a class="text-decoration-none text-black" href="{{ route('main.index') }}">назад</a></th>
            <th colspan="4" class="text-center fs-2">Авторы</th>
        </tr>
        <tr class="text-center">
            <th></th>
            <th>№</th>
            <th>Имя</th>
            <th>Почта</th>
            <th>Количество книг</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr class="text-center" onclick="window.location='{{ route('main.author.show', $user->id) }}'" style="cursor: pointer">
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


