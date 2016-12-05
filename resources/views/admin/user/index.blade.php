@extends('layouts.admin')

@section('content')
    <table class="table w3-border" style="border-radius: 4px;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Admin</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th>{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$admin = ($user->admin) ? 'true' : 'false'}}</td>
                    <td><a href="{{route('user.show', $user->id)}}" class="btn btn-sm btn-primary">View</a> <a href="{{route('user.edit', $user->id)}}" class="btn btn-sm btn-warning">Edit</a></td>
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
