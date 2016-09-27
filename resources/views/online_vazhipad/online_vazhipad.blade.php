<!DOCTYPE html>
<html>
		<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">

	    <title>Online Vazhipad</title>
	    <link rel="icon" href="{{asset('favicon.ico')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

	    <!-- Styles -->
	    <link href="/css/app.css" rel="stylesheet">

	    <!-- Scripts -->
	    <script>
	        window.Laravel = <?php echo json_encode([
	            'csrfToken' => csrf_token()
	        ]);  ?>
	    </script>
	    <nav class="navbar navbar-default">
          <div class="box-shadow">
            <div class="navbar navbar-inverse n-m-nav ad-mg-btm-0">
              <h1><a href="/">KESAVAPURAM SREEKRISHNASWAMY TEMPLE</a></h1>
            </div>
          </div>
        </nav>

	  @if (Auth::guest())
		        	<div class="col-md-12 " style="text-align: center;">
		        		<div class="panel panel-primary">
		        		<h2>Welcome to Kesavapuram Sreekrishnaswamy Temple Online Vazhipad booking please Login to continue</h2>
		        		<h3><a href="{{url('/login')}}">Log in</a></h3><br>
		        		<h2>If your are not a member yet please register by clicking the link below
		        		<h3><a href="{{url('/register')}}">Register</a></h3>
		        		<br>
		        	</div>
		        	<br>
		        	<br>
		        	</div>
		        	<br>
		        	<br>
		        	<br>
		        	<br>
		        @else
		        	<div class="col-md-12 text-center ad-a-w">
		        		<span style="color:#fff" class="">Welcome: <b>{{Auth::user()->name}}</b></span><br>
		        		<a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out" style="color:#fff!Important;" aria-hidden="true"></i> Logout
                        </a>
                        <h3><a href="{{url('/addtocart')}}">book</a></h3>
		        		<br>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;"> 
                            {{ csrf_field() }}
                        </form>
		        	</div>
		        	<form>
		        	<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</form>
		        @endif
		  <footer class="site-footer ad-footer" style="background-color:#3b5998; width:100%; bottom:0; position: fixed; box-shadow: 0 0 25px 1px #fff; z-index: 100;">
		    <div class="container" style="text-align: center;">
		        <p>
			        Copyright © 2016 | All rights reserved | Design by <a href="http://www.hkwebdevelopers.weebly.com">
			        Kesavapuram Brothers</a>
		        </p>
		    </div>
		</footer>
		<audio hidden id="audio">
	        <source src="{{asset('sounds/click.mp3')}}">
	    </audio>
	    <script src="/js/app.js"></script>
	    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>      
	</head>	        
	</html>