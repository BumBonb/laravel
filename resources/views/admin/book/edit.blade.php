@extends('admin.layouts.app')
@section('content_admin')
    <div class="content-wrapper">
        <section class="content">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Редактирование книги</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.book.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input class="form-control form-control-lg" type="text" name="title" placeholder="Название книги" value="{{ $book->title }}">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <br>

                        <textarea class="form-control" rows="3" type="text" name="description" placeholder="Описание ..." style="height: 163px;">{{ $book->description }}</textarea>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <br>
                        <div class="form-group w-50">
                            <select class="select2" name="genre_ids[]" multiple="multiple" data-placeholder="Выберите жанр(ы)" style="width: 100%;">
                                @foreach($genres as $genre)
                                    <option {{ is_array($book->genres->pluck('id')->toArray() ) && in_array($genre->id, $book->genres->pluck('id')->toArray() ) ? ' selected' : '' }} value="{{ $genre->id }}">{{ $genre->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('cover')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <br>
                        <div class="w-50">
                            <img src="{{url('storage/' . $book->cover)}}" alt="" class="w-50">
                        </div>
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
                        <button type="submit" class="btn btn-primary">Обновить</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
