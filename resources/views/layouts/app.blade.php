<!DOCTYPE html>
<html lang="en">
<head>
    <title>KESAVAPURAM SREEKRISHNASWAMY TEMPLE</title>
    <style>
        .ad-footer {
            padding-top: 10px;
            font-size: 14px;
            border-top: 2px solid #fff;
            color: white;
            margin-top: 20px;
        }
        .ad-footer a {
            color: #fff!Important;
        }
    </style>
    @include('partials._head')
    @include('partials._js')
    <!-- Scripts -->
    </script>
</head>
<body>
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
                <b> KESAVAPURAM SREEKRISHNASWAMY TEMPLE</b>
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
    @include('partials._audio')
    <footer class="site-footer ad-footer" style="background-color:#CA8F44; width:100%; box-shadow: 0 0 25px 1px #fff; overflow: hidden; position: absolute; bottom: 0;">
    	<div class="container" style="text-align: center;">
    		<p style="margin-bottom: 1.1vh">
    			Copyright © 2016 | All rights reserved | Design by <a href="http://www.hkwebdevelopers.weebly.com">
    			Kesavapuram Brothers</a>
    		</p>
    	</div>
    </footer>
</body>
</html>
