@extends('admin.layouts.app')
@section('content_admin')
    <div class="content-wrapper">
        <section class="content">
            <div class="d-flex align-items-center">
                <h3 class="ms-2 me-2">{{ $book->title }}</h3>
                <a href="{{ route('admin.book.edit', $book->id) }}"><ion-icon name="pencil-outline" style="color: black; margin-left: 8px"></ion-icon></a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Автор</th>
                                        <th>Жанр</th>
                                        <th>Описание</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a href=""><ion-icon name="eye-outline" style="color: black"></ion-icon></a>
                                                <a href=""><ion-icon name="pencil-outline" style="color: black"></ion-icon></a>
                                                <a href=""><ion-icon name="skull-outline" style="color: red"></ion-icon></a>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


