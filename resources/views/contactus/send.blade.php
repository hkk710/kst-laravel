<!DOCTYPE html>
<html>
	<body style="background: #fff; background-size: cover; line-height: 30px;">
		<div style="border: 2px solid #f5f8fa;">
			<div style="background: #f5f8fa; padding: 15px; text-align: center; line-height: normal;">
				<h3 style="margin: 0;"><b>{{ config('app.name') }}</b></h3><br>
				<h4 style="margin: 0;">FeedBack</h4>
			</div>
			<div style="padding: 30px;">
				<div>
					<div style="border: 2px solid #f5f8fa; padding: 15px; margin: 10px;">
						<b>From:</b> {{ $_POST['name'] }}
						@if (Auth::check())
							<br><b>Auth From:</b> {{ Auth::user()->name }}
						@endif
					</div>
					<div style="border: 2px solid #f5f8fa; padding: 15px; margin: 10px;">
						<b>Email:</b> {{ $_POST['email'] }}
						@if (Auth::check())
							<br><b>Auth Email:</b> {{ Auth::user()->email }}
						@endif
					</div>
					<div style="border: 2px solid #f5f8fa; padding: 15px; margin: 10px;">
						<b>subject:</b> {{ $_POST['subject'] }}
					</div>
					<div>
						<p>{{ $_POST['comment'] }}</p>
					</div>
				</div>
			</div>
			<div style="background: #f5f8fa; padding: 15px; text-align: center;">
				© 2016 <a href="{{ url('/') }}">{{ config('app.name') }}</a>. All rights reserved.
			</div>
		</div>
	</body>
</html>
