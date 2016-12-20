@extends('layouts.admin')

@section('head')
    <script type="text/javascript" src="{{ asset('js/vue.min.js') }}"></script>
@endsection

@section('content')
    <table class="table w3-border" style="border-radius: 4px;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Admin</th>
                <th style="width: 25%;">
                    <div class="input-group" id="app">
                        {!! Form::open(['style' => 'display: inherit;', 'method' => 'GET']) !!}
                            <div style="display: inherit; width: 100%;">
                                <input type="text" class="form-control" v-bind:placeholder="message" aria-describedby="basic-addon2" name="search" id="search" v-on:keyUp="search">
                            </div>
                            <select class="form-control" name="search_by" v-on:change="changeFunction" id="search_by">
                                <option value="name">Search by Name</option>
                                <option value="email">Search by Email</option>
                            </select>
                        {!! Form::close() !!}
                    </div>
                </th>
            </tr>
        </thead>
        <tbody id="tbody">
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

@section('js')
    <script type="text/javascript">
        new Vue({
            el: "#app",
            data: {
                message: 'search by name...'
            },
            methods: {
                changeFunction: function() {
                    this.message = 'search by ' + $('#search_by option:selected').val() + '...';
                    if ($('#search_by option:selected').val() == 'email') {
                        $('#search').attr('type', 'email');
                    }
                    else if ($('#search_by option:selected').val() == 'name') {
                        $('#search').attr('type', 'text');
                    }
                },
                search: _.debounce(function(e) {
                    var search = e.target.value;
                    var body = $('#tbody');
                    if (!search == "") {
                        $.get('/admin/users/search?search=' + search + '&search_by=' + $('#search_by option:selected').val(), function(data) {
                            body.empty();
                            $.each(data, function(index, subcatObj) {
                                body.append('<tr><th>' + subcatObj.id + '</th><td>' + subcatObj.name + '</td><td>' + subcatObj.email + '</td><td>' + (subcatObj.admin ? 'True': 'False') + '</td><td><a href="http://localhost:8000/admin/users/' + subcatObj.id + '" class="btn btn-sm btn-primary">View</a> <a href="http://localhost:8000/admin/users/' + subcatObj.id + '/edit" class="btn btn-sm btn-warning">Edit</a> <a href="http://localhost:8000/admin/users/' + subcatObj.id + '/delete" class="btn btn-sm btn-danger">Delete</a></td></tr>');
                            })
                        })
                    }
                    else {
                        body.html('@foreach ($users as $user) <tr><th>{{$user->id}}</th><td>{{$user->name}}</td><td>{{$user->email}}</td><td>{{$admin = ($user->admin) ? 'True' : 'False'}}</td><td><a href="{{route('user.show', $user->id)}}" class="btn btn-sm btn-primary">View</a> <a href="{{route('user.edit', $user->id)}}" class="btn btn-sm btn-warning">Edit</a> <a href="{{route('user.delete', $user->id)}}" class="btn btn-sm btn-danger">Delete</a></td></tr> @endforeach')
                    }
                }, 400)
            }
        })
    </script>
@endsection
