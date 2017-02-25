@component('mail::message')
# Contact Us Mail
<hr>

**From:** {{ $_POST['name'] }}
@if (Auth::check())
<br>**Auth From:** {{ Auth::user()->name }}
@endif

**Email:** {{ $_POST['email'] }}
@if (Auth::check())
<br>**Auth Email:** {{ Auth::user()->email }}
@endif

**subject:** {{ $_POST['subject'] }}

<p style="padding: 5px; border: 1px solid #ddd;">{{ $_POST['comment'] }}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
