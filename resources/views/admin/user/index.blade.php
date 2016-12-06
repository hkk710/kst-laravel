@extends('layouts.admin')

@section('content')
    <table class="table w3-border" style="border-radius: 4px;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Admin</th>
                <th style="width: 25%;">
                    <div class="input-group">
                        {!! Form::open(['style' => 'display: inherit;', 'method' => 'POST']) !!}
                            <input type="text" class="form-control" placeholder="search name..." aria-describedby="basic-addon2" name="search" value="<?php if (isset($_POST['search'])) echo $_POST['search']; ?>">
                            <span class="input-group-addon w3-padding-0" id="basic-addon2"><button class="ad-btn-no"><i class="fa fa-search"></i></button></span>
                        {!! Form::close() !!}
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th>{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$admin = ($user->admin) ? 'True' : 'False'}}</td>
                    <td>
                        <a href="{{route('user.show', $user->id)}}" class="btn btn-sm btn-primary">View</a>
                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{route('user.delete', $user->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if (count($users) > 15)
        <div class="text-right">
            {{ $users->links() }}
        </div>
    @endif
@endsection
