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
    @include('includes.openGraph')
    @vite('resources/js/app.js')
    @vite('resources/sass/app.sass')
</head>
<body>
    <div itemscope itemtype="http://schema.org/Organization" style="position: absolute; visibility: hidden;">
        <span itemprop="name">{{ $company->name }}</span>
        <br>
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">{{ $company->address }}</span>
            <br>
            <span itemprop="addressLocality">Томск</span>
            <br>
            <span itemprop="addressRegion">Томская область</span>
            <span itemprop="postalCode">634021</span>
        </div>

            Phone: 
        <span itemprop="telephone">{{ $company->telAdd }}</span>
    </div>
    <div id="app">
        <x-front.nav></x-front.nav>
        @yield('content')
        <x-front.footer></x-front.footer>
        <cookie-popup></cookie-popup>
    </div>
    @include('includes.yandexMetrika')
</body>
</html>