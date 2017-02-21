<nav class="navbar navbar-inverse n-m-nav ad-mg-btm-0">
    <div class="container-fluid" style="background-color:#CA8F44;">
        <ul class="nav navbar-nav">
            <li><a href="{{url('/')}}"><b>Home</b></a></li>
            <li class="{{ Request::is('contact_us') ? 'active' : '' }}"><a href="{{url('/contact_us')}}">Contact us</a></li>
            <li class="{{ Request::is('upadevas') ? 'active' : '' }}"><a href="{{url('/upadevas')}}">Upadevas</a></li>
            <li class="{{ Request::is('activities') ? 'active' : '' }}"><a href="{{url('/activities')}}">Activities</a></li>
            <li class="{{ Request::is('festivals') ? 'active' : '' }}"><a href="{{url('/festivals')}}">Festivals</a></li>
            <li class="{{ Request::is('facilities') ? 'active' : '' }}"><a href="{{url('/facilities')}}">Facilities</a></li>
        </ul>
    </div>
</nav>
