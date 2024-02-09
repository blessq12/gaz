<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Не назначен')</title>
    <meta name="description" content="@yield('desc', 'Описание не назначено')">
    @include('includes.cdn')
    @include('includes.favicon')
    @vite('resources/js/app.js')
    @vite('resources/sass/app.sass')
</head>
<body>
    <div id="app">
        <x-front.nav></x-front.nav>
        @yield('content')
        <x-front.footer></x-front.footer>
    </div>
</body>
</html>