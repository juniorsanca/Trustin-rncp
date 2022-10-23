<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width" />
        @include('partials.header')
    </head>
    <body class="trustin-home__body">
        <div id="app">
            @include('partials.nav')
            @yield('home-content')
            @yield('creators')
            @yield('creator')
        </div>

        @include('partials.footer')
    </body>
</html>