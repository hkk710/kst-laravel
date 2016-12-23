@extends('main')

@section('title', 'Online Vazhipad')

@section('head')
	<script src="{{asset('js/vue.min.js')}}"></script>
@endsection

@section('content')

	@if (Auth::guest())
		<div class="col-md-12 " style="text-align: center;">
		    <div class="panel panel-primary">
		        <h2>Welcome to Kesavapuram Sreekrishnaswamy Temple Online Vazhipad booking please Login to continue</h2>
		        <h3><a href="{{url('/login')}}">Log in</a></h3><br>
		        <h2>If your are not a member yet please register by clicking the link below</h2>
		        <h3><a href="{{url('/register')}}">Register</a></h3>
		        <br>
		    </div>
		</div>
	@else
		<div class="col-md-12 text-center">
			<span class="ad-a-w h4">
				<span style="color:#fff" class="">Welcome: <b>{{Auth::user()->name}}</b></span>
			</span><br>
			<span class="text-right ad-a-w">
				<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out" style="color:#fff!Important;" aria-hidden="true"></i> Logout</a>
		    </span>
		</div>
		<div class="container ad-mg-tp">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading" style="background: #e67300; color: #fff;"><b>Online Vazhipad</b></div>
						<div class="panel-body">
							{!! Form::open(['id' => 'app']) !!}
								<div class="col-md-4">
									<strong>Prathista: </strong>
								</div>
								<div class="col-md-8 input-group-sm">
									<select class="form-control">
										<option value="">Add...</option>
										<option value="">Add...</option>
										<option value="">Add...</option>
										<option value="">Add...</option>
									</select>
								</div><br><br>
								<div class="col-md-4">
									<strong>Vazhipad Type: </strong>
								</div>
								<div class="col-md-8 input-group-sm">
									<select class="form-control" name="vtype" id="vtype" v-on:change="changeFunction">
										<option value="0">Select any</option>
										@foreach ($vtypes as $vtype)
											<option value="{{$vtype->id}}">{{$vtype->name}}</option>
										@endforeach
									</select>
								</div><br><br>
								<div class="col-md-4">
									<strong>Vazhipad Name:</strong>
								</div>
								<div class="col-md-8 input-group-sm">
									<select class="form-control" name="vname" id="vname" v-on:change="priceFunction">
										<option value="0">Select any Vazhipad Type</option>
									</select>
								</div><br><br>
								<div class="col-md-4">
									<strong>Your Star (nakshatram):</strong>
								</div>
								<div class="col-md-8 input-group-sm">
									<select name="" id="" class="form-control">
										<option value="">Add...</option>
										<option value="">Add...</option>
										<option value="">Add...</option>
									</select>
								</div><br><br>
								<div class="col-md-4">
									<strong>Your Name:</strong>
								</div>
								<div class="col-md-8 input-group-sm">
									<input type="text" placeholder="Your name...." class="form-control">
								</div><br><br>
								<div class="col-md-4">
									<strong>Vazhipad Date:</strong>
								</div>
								<div class="col-md-8 input-group-sm">
									<div class="col-md-4 ad-pd-0">
										<select id="namebox" class="form-control">
									        <option value="0" selected>Day</option>
											<?php
												for ($i = 1; $i < 32; $i++) {
													echo '<option value="' . $i . '">' . $i . '</option>';
												};
											?>
									    </select>
									</div>
									<div class="col-md-4 ad-pd-0">
										<select id="namebox" class="form-control">
											<option value="0" selected>Month</option>
											<option value="1">Jan</option>
										    <option value="2">Feb</option>
										    <option value="3">Mar</option>
										    <option value="4">Apr</option>
										    <option value="5">May</option>
										    <option value="6">Jun</option>
										    <option value="7">Jul</option>
										    <option value="8">Aug</option>
										    <option value="9">Sept</option>
										    <option value="10">Oct</option>
										    <option value="11">Nov</option>
										    <option value="12">Dec</option>
										</select>
									</div>
									<div class="col-md-4 ad-pd-0">
										<select id="namebox" class="form-control">
										    <option value="0" selected>Year</option>
											<?php
												for ($i = date('Y'); $i < 2031; $i++) {
													echo '<option value="' . $i . '">' . $i . '</option>';
												};
											?>
										</select>
									</div>
								</div><br><br>
								<div class="col-md-4">
									<strong>Price:</strong>
								</div>
								<div class="col-md-8 input-group-sm">
									<div class="input-group">
										<span class="input-group-addon"><b>&#8377;</b></span>
										<label class="form-control" id="price"></label>
									</div>
								</div><br><br>
								<div class="col-md-12 text-right">
									<div class="ad-6">
										<span>
											<input type="submit" class="btn btn-danger">
										</span>
									</div>
									<div class="ad-6">
										<span>
											<input type="reset" class="btn btn-danger">
										</span>
									</div>
								</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
		<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	        {{ csrf_field() }}
	    </form>
		<script>
			new Vue({
				el: '#app',
				methods: {
					changeFunction: function(e) {
						if ($('#vtype option:selected').val() == 0) {
							$('#vname').empty();
							$('#vname').append('<option value="0">Select any Vazhipad Type</option>');
						}
						else {
							var cat_id = e.target.value;
							$.get('/online_vazhipad/ajax?cat_id=' + cat_id, function(data) {
								$('#vname').empty();
								$('#vname').append('<option value="0">Select any</option>')
								$.each(data, function(index, subcatObj) {
									$('#vname').append('<option value="' + subcatObj.id + '">' + subcatObj.name + '</option>');
								});
							})
						}
					},
					priceFunction: function(e) {
						var value = e.target.value;
					}
				}
			})
		</script>
	@endif

@endsection
