@extends('main')

@section('title', 'Contact us')

@section('head')
  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
  <link rel="stylesheet" href="{{asset('/css/w3.css')}}">
@endsection
@section('content')
    <body class="text-center body">
        <div class="col-md-12">
        @if (Session::has('success'))
          <div class="alert alert-success">
            <a href="#" data-dismiss="alert" class="close">&times;</a>
            {{Session::get('success')}}
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
          <div class="col-md-6" style="color: #fff;">
            <h2><b>KESAVAPURAM SREEKRISHNASWAMY TEMPLE</b>,</h2>
            <h4><strong>MAZHUTHAMKUZHY, KESAVAPURAM ROAD</strong></h4>
            <h4><strong>PIN CODE 695 030, PHONE-0471 2362600</strong></h4>
          </div>
          <div class="col-md-6" style="padding-right: 30px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15783.379663305952!2d76.98001404760743!3d8.514434365177046!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xddcb74252996ab11!2sKeshavapuram+Srikrishna+Swamy+Temple!5e0!3m2!1sen!2sin!4v1474152170481" width="600" height="450" frameborder="0" style="border:0;width: 100%;" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-8 col-md-offset-2" style="margin-bottom: 5%; padding-top: 5%;">
          <div class="panel panel-default" style="border: 0; box-shadow: 0 0 30px 3px #eee;">
          <div class="panel-heading">FeedBack</div>
            <div class="panel-body" style="background: #e67300; color: #fff;">
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

        <div class="ad-icon text-left">
            <li><a href="https://www.facebook.com/KesavapuramSreekrishnaSwamyTemple/"><i class="fa-1 fa fa-facebook fa-ad"></i></a></li>
            <li><a href="#"><i class="fa-1 fa fa-linkedin fa-ad"></i></a></li>
            <li><a href="#"><i class="fa-1 fa fa-google-plus fa-ad"></i></a></li>
        </div>
@endsection
