@extends('layouts.admin')

@section('content')

    {!! Form::open(['action' => 'AdminController@vnameStore']) !!}
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'name...']) }}
        {{ Form::label('vtypes_id', 'Vazhipad Type:') }}
        <select class="form-control" name="vtypes_id">
            @foreach ($vtypes as $vtype)
                <option value="{{ $vtype->id }}">{{ $vtype->name }}</option>
            @endforeach
        </select>
        {{ Form::submit('Create', ['class' => 'btn btn-block btn-success w3-margin-top']) }}
    {!! Form::close() !!}

@endsection
