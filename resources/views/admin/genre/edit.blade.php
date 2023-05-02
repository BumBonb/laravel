@extends('admin.layouts.app')
@section('content_admin')
    <div class="content-wrapper">
        <section class="content">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Редактирование жанра</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.genre.update', $genre->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <input class="form-control form-control-lg" type="text" name="title" placeholder="Название жанра" value="{{ $genre->title }}">
                        @error('title')
                        <div class="text-danger">Пустое поле</div>
                        @enderror
                        <br>
                        <button type="submit" class="btn btn-primary ">Обновить</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
