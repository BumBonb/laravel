@extends('main.author_menu.layouts.main')
@section('title', $user->name)
@section('content')
    <table class="table table-hover text-nowrap mt-5">
        <thead>
        <tr>
            <th>ID</th>
            <th>Автор</th>
            <th>Жанр</th>
            <th>Название</th>
            <th>Дата публикации</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            @if($book->author->id === auth()->user()->id)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->author->name }}</td>
                <td>
                    @foreach($book->genres as $genre)
                        {{ $genre->title }}
                    @endforeach
                </td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->created_at }}</td>
                <td>
                    <a href="{{ route('main.book.show', $book->id) }}"><ion-icon name="eye-outline" style="color: black"></ion-icon></a>
                </td>
                <td>
                    <a href="{{ route('main.book.edit', $book->id) }}"><ion-icon name="pencil-outline" style="color: black"></ion-icon></a>
                </td>
                <td>
                    <form action="{{ route('main.book.delete', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-none bg-transparent">
                            <i role="button"> <ion-icon name="skull-outline" style="color: red"></ion-icon></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Создание книги</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('main.book.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="form-control form-control-lg" type="text" name="title" placeholder="Название книги" value="{{ old('title') }}">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <br>
                <textarea class="form-control" rows="3" type="text" name="description" placeholder="Описание ..." style="height: 163px;">{{ old('description') }}</textarea>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <br>
                <div class="form-group w-50">
                    <select class="select2" name="genre_ids[]" multiple="multiple" data-placeholder="Выберите жанр(ы)" style="width: 100%;">
                        @foreach($genres as $genre)
                            <option {{ is_array(old('genre_ids')) && in_array($genre->id, old('genre_ids')) ? ' selected' : '' }} value="{{ $genre->id }}">{{ $genre->title }}</option>
                        @endforeach
                    </select>
                </div>
                @error('cover')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <br>
                <div class="form-group w-50">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="cover">
                            <label class="custom-file-label" >Выберите обложку</label>
                        </div>
                    </div>
                    @error('cover')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="bookFile" id="bookFile">
                            <label class="custom-file-label" >Добавте файл книги</label>
                        </div>
                    </div>
                    @error('bookFile')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
    <style>
        .custom-file-input:lang(en)~.custom-file-label::after {
            content: "...";
        }
    </style>
@endsection
