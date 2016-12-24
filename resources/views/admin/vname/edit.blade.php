@extends('layouts.admin')

@section('content')
    {!! Form::model($vname, ['route' => ['vname.update', $vname->id], 'method' => 'PUT']) !!}

        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control w3-margin-bottom']) }}

        <select class="form-control w3-margin-bottom" name="vtypes_id">
            @foreach ($vtypes as $vtype)
                <option value="{{ $vtype->id }}" <?php if ($vtype->id == $vname->vtypes_id) echo 'selected'; ?>>{{ $vtype->name }}</option>
            @endforeach
        </select>

        <div class="input-group w3-margin-bottom">
            <span class="input-group-addon"><b>&#8377;</b></span>
            {{ Form::number('price', null, ['class' => 'form-control']) }}
        </div>

        <div class="col-sm-6">
            <a href="{{ route('vname.show', $vname->id) }}" class="btn btn-block btn-info">Cancel</a>
        </div>
        <div class="col-sm-6">
            {{ Form::submit('Save Changes', ['class' => 'btn btn-block btn-success']) }}
        </div>

    {!! Form::close() !!}
@endsection
