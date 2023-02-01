<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       @include('components/head')
    </head>
    <body >
       @yield('list-train')
    </body>
</html>
