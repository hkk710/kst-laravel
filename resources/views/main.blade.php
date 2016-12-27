<!DOCTYPE html>
<html>
    <head>
        @include('partials._head')
    </head>
    <body>
        @include('partials._nav')
        @yield('content')
        @include('partials._js')
        @include('partials._footer')
        @include('partials._audio')
    </body>
</html>
