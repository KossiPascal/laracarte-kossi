<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <title>{{ pageTitle($title ?? '') }}</title>
</head>

<body>
    @include('layouts.partials._nav');

    <div class="container global-content">
        @yield('content')
    </div>

    @include('layouts.partials._footer')

    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @include('flashy::message')
</body>

</html>
