<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin | KESAVAPURAM SREEKRISHNASWAMY TEMPLE</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('/css/w3.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.css')}}">
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse w3-margin-0">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <button class="w3-opennav w3-xlarge w3-hide-large navbar-toggle" onclick="w3_open()">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">KESAVAPURAM SREEKRISHNASWAMY TEMPLE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profile <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a></li>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <nav class="w3-sidenav w3-collapse w3-white w3-card-2 w3-animate-left" id="mySidenav">
      <a href="javascript:void(0)" onclick="w3_close()"
      class="w3-closenav w3-large w3-hide-large" id="close-btn">Close &times;</a>
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
      <a href="#">Link 4</a>
      <a href="#">Link 5</a>
    </nav>
    <div class="" id="main-div">
      <div class="container w3-margin w3-padding">
        @yield('content')
      </div>
    </div>
    <script type="text/javascript">
    function w3_open() {
      document.getElementById("mySidenav").style.display = "block";
    }
    function w3_close() {
      document.getElementById("mySidenav").style.display = "none";
    }
    </script>
  </body>
</html>
