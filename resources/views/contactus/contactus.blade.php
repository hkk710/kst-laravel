@extends('main')

@section('title', 'Contact us')

@section('head')
  <link rel="stylesheet" href="{{asset('/css/w3.css')}}">
@endsection
@section('content')
    <body>
        <div class="col-md-12">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <a href="#" data-dismiss="alert" class="close">&times;</a>
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger text-left">
                    Errors:
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="col-md-10 col-md-offset-1" style="margin-bottom: 5%; padding-top: 1% ;">
                <div class="panel panel-default" style="border: 0; box-shadow: 0 0 30px 3px #eee;">
                    <div class="panel-heading" style="background-color:#CA8F44;">FeedBack</div>
                    <div class="panel-body" style="background: indigo; color: #fff;">
                        <div class="col-md-6" style="color: #fff;">
                            <br>
                            <br>
                            <h6 class="text-left">To</h6>
                            <h2 class="text-center"><b>KESAVAPURAM SREEKRISHNASWAMY TEMPLE</b></h2>
                            <h4><strong>MAZHUTHAMKUZHY, KESAVAPURAM ROAD</strong></h4>
                            <h4><strong>PIN CODE 695 030, PHONE-0471 2362600</strong></h4>
                        </div>
                        <div class="col-md-6" style="padding-right: 30px;">
                            <div class="w3-col m15 w3-container">
                                <!-- Add Google Maps -->
                                <div id="googleMap" class="w3-round-large w3-greyscale slideanim" style="width:100%;height:400px;"></div>
                            </div>
                            <br>
                        </div>
                        <h6 class="text-left" >From</h6>
                        {!! Form::open(['class' => 'col-md-12', 'action' => 'contactusController@sendmail']) !!}

                            {{ Form::label('name', 'Name:', ['style' => 'float: left;']) }}
                            {{ Form::text('name', null, ['class' => 'form-control w3-margin-bottom', 'placeholder' => 'Name...*']) }}

                            {{ Form::label('email', 'Email:', ['style' => 'float: left;']) }}
                            {{ Form::email('email', null, ['class' => 'form-control w3-margin-bottom', 'placeholder' => 'Email...*']) }}

                            {{ Form::label('subject', 'Subject:', ['style' => 'float: left;']) }}
                            {{ Form::text('subject', 'FeedBack', ['class' => 'form-control w3-margin-bottom', 'placeholder' => 'subject...*']) }}

                            {{ Form::label('comment', 'Message:', ['style' => 'float: left;']) }}
                            {{ Form::textarea('comment', null, ['class' => 'form-control w3-margin-bottom', 'placeholder' => 'Your valuable feedback...*']) }}

                            {{ Form::submit('Send', ['class' => 'btn btn-success']) }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

            <div class="all-icon text-left">
                <li><a href="https://www.facebook.com/KesavapuramSreekrishnaSwamyTemple/"><i class="fa-1 fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-1 fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa-1 fa fa-google-plus"></i></a></li>
            </div>
        </div>


        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            // Google Map Location
            var myCenter = new google.maps.LatLng(8.514961, 76.977591);

            function initialize() {
                var mapProp = {
                    center: myCenter,
                    zoom: 12,
                    scrollwheel: false,
                    draggable: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

                var marker = new google.maps.Marker({
                    position: myCenter,
                });

                marker.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
@endsection
