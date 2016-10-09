
<div style="background-image:url('images/login4.jpg');min-height: 100vh; background-size: cover;">
@include('layouts.app')

@include('admin.partials.header')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default ad-bd-bd">
                <div class="panel-heading">{{ trans('quickadmin::auth.login-login') }}</div>
                <div class="panel-body" style="background-color:#e67300;color:#fff;">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>{{ trans('quickadmin::auth.whoops') }}</strong> {{ trans('quickadmin::auth.some_problems_with_input') }}
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">{{ trans('quickadmin::auth.login-email') }}</label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control ad-bd-bd"
                                       name="email"
                                       style="border-radius: 4px!Important;" 
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">{{ trans('quickadmin::auth.login-password') }}</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control ad-bd-bd"
                                       name="password"
                                       style="border-radius: 4px!Important;">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <label>
                                    <input type="checkbox"
                                           name="remember">{{ trans('quickadmin::auth.login-remember_me') }}
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary ad-bd-bd"
                                        style="margin-right: 15px; border-radius: 4px!Important;">
                                    {{ trans('quickadmin::auth.login-btnlogin') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.partials.footer')
@include('layouts.footer')
@include('layouts.audio')
