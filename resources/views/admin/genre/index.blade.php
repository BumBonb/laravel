@extends('admin.layouts.app')
@section('content_admin')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th colspan="3" class="text-center">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($genres as $genre)
                                        <tr>
                                            <td>{{ $genre->id }}</td>
                                            <td>{{ $genre->title }}</td>
                                            <td>
                                                <a href="{{ route('admin.genre.show', $genre->id) }}"><ion-icon name="eye-outline" style="color: black"></ion-icon></a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.genre.edit', $genre->id) }}"><ion-icon name="pencil-outline" style="color: black"></ion-icon></a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.genre.delete', $genre->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-none bg-transparent">
                                                        <i role="button"> <ion-icon name="skull-outline" style="color: red"></ion-icon></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Создание жанра</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.genre.store') }}" method="POST">
                                @csrf
                                <input class="form-control form-control-lg" type="text" name="title" placeholder="Название жанра">
                                @error('title')
                                <div class="text-danger">Пустое поле</div>
                                @enderror
                                <br>
                                <button type="submit" class="btn btn-primary ">Добавить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


