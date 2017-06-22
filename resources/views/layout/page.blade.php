<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kerim Güney's Homepage</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @yield('head')
</head>
<body>
@yield('content')
@yield('scripts')
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
