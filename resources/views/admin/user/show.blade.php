@extends('layouts.admin')

@section('content')
    {!! Form::model($user) !!}

        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}

        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}

        {{ Form::label('admin', 'Admin:') }}
        <input type="text" value="{{ $admin = ($user->admin) ? 'True' : 'False' }}" class="form-control w3-margin-bottom" name="admin" id="admin" readonly>

    {!! Form::close() !!}
    <div class="col-sm-6">
        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-block btn-warning">Edit</a>
    </div>
    <div class="col-sm-6">
        <a href="" class="btn btn-block btn-danger">Delete</a>
    </div>
@endsection
