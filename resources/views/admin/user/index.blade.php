@extends('layouts.admin')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/filter.css') }}">
    <script type="text/javascript" src="{{ asset('js/filter.js') }}"></script>
@endsection

@section('content')
    <table class="table w3-border" style="border-radius: 4px;" id="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="tbody">
            @foreach ($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-sm btn-primary">View</a>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('user.delete', $user->id) }}" class="btn btn-sm btn-danger">Delete</a>
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

@section('js')
    <script type="text/javascript">
        $('#table').DataTable();
    </script>
@endsection
