@extends('admin.layouts.app')
@section('content_admin')
    <div class="content-wrapper">
        <section class="content">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Редактирование пользователя</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <input class="form-control form-control-lg" type="text" name="name" placeholder="Имя автора" value="{{ $user->name }}">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <br>
                        <div class="form-group w-50">
                            <select class="form-control" name="role"  style="width: 100%;">
                                @foreach($roles as $id => $role)
                                    <option {{ $id == $user->role ? ' selected' : '' }} value="{{ $id }}">{{ $role }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('role')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <br>
                        <div class="form-group w-50">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <br>
                        <input class="form-control form-control-lg" type="email" name="email" placeholder="Почта автора" value="{{ $user->email }}">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <br>
                        <button type="submit" class="btn btn-primary ">Обновить</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
