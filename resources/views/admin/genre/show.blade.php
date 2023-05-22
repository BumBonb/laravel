@extends('admin.layouts.app')
@section('content_admin')
    <div class="content-wrapper">
        <section class="content">
            <div class="d-flex align-items-center">
                <h3 class="ms-2 me-2">{{ $genre->title }}</h3>
                <a href="{{ route('admin.genre.edit', $genre->id) }}"><ion-icon name="pencil-outline" style="color: black; margin-left: 8px"></ion-icon></a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название</th>
                                        <th>Автор</th>
                                        <th>Жанры</th>
                                        <th>Дата публикации</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($genre->books as $book)
                                    <tr class="text-center">
                                        <td>{{ $book->id }}</td>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author->name }}</td>
                                        <td>
                                            @foreach($book->genres as $genre)
                                                {{ $genre->title }}
                                            @endforeach
                                        </td>
                                        <td>{{ $book->created_at->format('d m y') }}</td>
                                        <td>
                                            <a href=""><ion-icon name="eye-outline" style="color: black"></ion-icon></a>
                                            <a href=""><ion-icon name="pencil-outline" style="color: black"></ion-icon></a>
                                            <a href=""><ion-icon name="skull-outline" style="color: red"></ion-icon></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


