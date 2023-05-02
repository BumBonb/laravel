@extends('admin.layouts.app')
@section('content_admin')
    <div class="content-wrapper">
        <section class="content">
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
                <td class="text-center d-print-none">
                     <span class="text-nowrap">
                        <a href="index.php" data-post="route=/sql&amp;db=LB&amp;table=genres&amp;sql_query=DELETE+FROM+%60genres%60+WHERE+%60genres%60.%60id%60+%3D+3&amp;message_to_show=%D0%A1%D1%82%D1%80%D0%BE%D0%BA%D0%B0+%D0%B1%D1%8B%D0%BB%D0%B0+%D1%83%D0%B4%D0%B0%D0%BB%D0%B5%D0%BD%D0%B0.&amp;goto=index.php%3Froute%3D%2Fsql%26db%3DLB%26table%3Dgenres%26sql_query%3DSELECT%2B%252A%2BFROM%2B%2560genres%2560%26message_to_show%3D%25D0%25A1%25D1%2582%25D1%2580%25D0%25BE%25D0%25BA%25D0%25B0%2B%25D0%25B1%25D1%258B%25D0%25BB%25D0%25B0%2B%25D1%2583%25D0%25B4%25D0%25B0%25D0%25BB%25D0%25B5%25D0%25BD%25D0%25B0.%26goto%3Dindex.php%253Froute%253D%252Ftable%252Fsql" class="delete_row requireConfirm"><span class="text-nowrap"><img src="themes/dot.gif" title="Удалить" alt="Удалить" class="icon ic_b_drop"></span></a>
                        <div class="hide">DELETE FROM genres WHERE `genres`.`id` = 3</div>
                    </span>
                </td>
            </div>
        </section>
    </div>
@endsection
