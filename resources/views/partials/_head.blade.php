<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf_token" content="{{ csrf_token() }}">
<link rel="icon" href="{{ asset('favicon.ico') }}">
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{asset('/css/font-awesome.css')}}">
<style>
    .pace.pace-inactive {
        display: none;
    }
    .pace {
        -webkit-pointer-events: none;
        pointer-events: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        z-index: 2000;
        position: fixed;
        height: 60px;
        width: 100px;
        margin: auto;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
    .pace .pace-progress {
        z-index: 2000;
        position: absolute;
        height: 60px;
        width: 100px;
        -webkit-transform: translate3d(0, 0, 0) !important;
        -ms-transform: translate3d(0, 0, 0) !important;
        transform: translate3d(0, 0, 0) !important;
    }
    .pace .pace-progress:before {
        content: attr(data-progress-text);
        text-align: center;
        color: #fff;
        background: #0080ff;
        border-radius: 50%;
        font-family: "Helvetica Neue", sans-serif;
        font-size: 14px;
        font-weight: 100;
        line-height: 1;
        padding: 20% 0 7px;
        width: 50%;
        height: 40%;
        margin: 10px 0 0 30px;
        display: block;
        z-index: 999;
        position: absolute;
    }
    .pace .pace-activity {
        font-size: 15px;
        line-height: 1;
        z-index: 2000;
        position: absolute;
        height: 60px;
        width: 100px;
        display: block;
        -webkit-animation: pace-theme-center-atom-spin 2s linear infinite;
        -moz-animation: pace-theme-center-atom-spin 2s linear infinite;
        -o-animation: pace-theme-center-atom-spin 2s linear infinite;
        animation: pace-theme-center-atom-spin 2s linear infinite;
    }
    .pace .pace-activity {
        border-radius: 50%;
        border: 5px solid #0080ff;
        content: ' ';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 60px;
        width: 100px;
    }
    .pace .pace-activity:after {
        border-radius: 50%;
        border: 5px solid #0080ff;
        content: ' ';
        display: block;
        position: absolute;
        top: -5px;
        left: -5px;
        height: 60px;
        width: 100px;
        -webkit-transform: rotate(60deg);
        -moz-transform: rotate(60deg);
        -o-transform: rotate(60deg);
        transform: rotate(60deg);
    }
    .pace .pace-activity:before {
        border-radius: 50%;
        border: 5px solid #0080ff;
        content: ' ';
        display: block;
        position: absolute;
        top: -5px;
        left: -5px;
        height: 60px;
        width: 100px;
        -webkit-transform: rotate(120deg);
        -moz-transform: rotate(120deg);
        -o-transform: rotate(120deg);
        transform: rotate(120deg);
    }
    @-webkit-keyframes pace-theme-center-atom-spin {
        0%   { -webkit-transform: rotate(0deg) }
        100% { -webkit-transform: rotate(359deg) }
    }
    @-moz-keyframes pace-theme-center-atom-spin {
        0%   { -moz-transform: rotate(0deg) }
        100% { -moz-transform: rotate(359deg) }
    }
    @-o-keyframes pace-theme-center-atom-spin {
        0%   { -o-transform: rotate(0deg) }
        100% { -o-transform: rotate(359deg) }
    }
    @keyframes pace-theme-center-atom-spin {
        0%   { transform: rotate(0deg) }
        100% { transform: rotate(359deg) }
    }
    body > :not(.pace),body:before,body:after {
        -webkit-transition: opacity .4s ease-in-out;
        -moz-transition: opacity .4s ease-in-out;
        -o-transition: opacity .4s ease-in-out;
        -ms-transition: opacity .4s ease-in-out;
        transition: opacity .4s ease-in-out
    }
    body:not(.pace-done) > :not(.pace),body:not(.pace-done):before,body:not(.pace-done):after {
        opacity: 0
    }
</style>
<script>
    window.Laravel =  <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
@yield('head')
