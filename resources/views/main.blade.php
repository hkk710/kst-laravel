<!DOCTYPE html>
<html>
    <head>
        @include('partials._head')
    </head>
    <body>
        @include('partials._nav')
        <div class="container">
            @yield('content')
        </div>
        @include('partials._js')
        @include('partials._footer')
        @include('partials._audio')
    </body>
</html>
