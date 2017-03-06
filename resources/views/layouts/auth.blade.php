<!DOCTYPE html>
<html lang="en">
<head>
    @section('title', config('app.name'))
    @include('partials._head')
    </script>
</head>
<body style="background-image:url('images/login4.jpg'); background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;">
    <nav class="navbar navbar-default navbar-static-top"  style="background-color:#CA8F44;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" style="color:#fff" href="{{ url('/') }}">
                <b>{{ config('app.name') }}</b>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right" >
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a style="color:#fff" href="{{ url('/login') }}">Login</a></li>
                        <li><a style="color:#fff" href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span style="color:#fff" class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('/home')}}"><i class="fa fa-user" style="color:#fff" aria-hidden="true"></i>
 Profile</a></li>
                                <div class="divider"></div>
                                <li>
                                    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out" style="color:#fff" aria-hidden="true"></i>Logout
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    @include('partials._js')
    @include('partials._audio')
    @include('partials._footer')
</body>
</html>
