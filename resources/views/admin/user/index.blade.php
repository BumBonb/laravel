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
                                    <th>Имя</th>
                                    <th>Почта</th>
                                    <th>Роль</th>
                                    <th colspan="3" class="text-center">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>
                                                <a href="{{ route('admin.user.show', $user->id) }}"><ion-icon name="eye-outline" style="color: black"></ion-icon></a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.user.edit', $user->id) }}"><ion-icon name="pencil-outline" style="color: black"></ion-icon></a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
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
                            <h3 class="card-title">Создание автора</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.user.store') }}" method="POST">
                                @csrf
                                <input class="form-control form-control-lg" type=name name="name" placeholder="Имя автора">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <br>
                                <div class="form-group w-50">
                                    <select class="form-control" name="role"  style="width: 100%;">
                                        @foreach($roles as $id => $role)
                                            <option {{ $id == old('role_id') ? ' selected' : '' }} value="{{ $id }}">{{ $role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('role')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <br>
                                <input class="form-control form-control-lg" type="email" name="email" placeholder="Почта автора">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <br>
                                <input class="form-control form-control-lg" type="password" name="password" placeholder="Пароль автора">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
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


