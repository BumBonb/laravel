<!doctype html>
<html lang="ru" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>

<body class="h-100">
<div class="min-vh-100 d-flex flex-column">
    <div class="position-sticky top-0 z-0 m-0 h-80px">
        @include('include.header')
    </div>
    <div class="flex-grow-1">
        @yield('content')
    </div>
    <div class="h-80px">
        @include('include.footer')
    </div>
</div>
</body>
</html>
