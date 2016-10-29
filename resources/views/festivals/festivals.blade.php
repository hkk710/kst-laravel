@extends('main')
@section('title', 'Festivals')
@section('content')
    <div class="text-center"><h1 style="color:#fff;">FESTIVALS</h1></div>
        <div class="container">
        <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" style="color:red;" href="#f1"><b>JANMASHTAMI MAHOTSAVAM</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f2"><b>PRETHISHTA DHINAM</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f3"><b>BHAGAVADA SAPTHAHAM</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f4"><b>SWARGAVATHIL EKADESHI</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f5"><b>NAVARATHIRI MAHOTSAVAM</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f6"><b>MANDALA CHIRAPPU MAHOTSAVAM</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f7"><b>THRIKARTHIKA MAHOTSAVAM</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f8"><b>VISHU KANNI</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f9"><b>VINAYAKA CHATHURTHI</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f10"><b>THIRUVATHIRA MAHOTSAVAM</b></a></li>
      </ul>
    </div>
    <div class="tab-content text-center">
    <div id="f1" class="tab-pane active text-center">
    <h2 style="color:red;">JANMASHTAMI MAHOTSAVAM (6 DAYS)</h2>
    <img src="{{asset('images/festival1.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f2" class="tab-pane fade">
     <h2 style="color:red;">PRETHISHTA DHINAM (1 DAY)</h2>'
    <img src="{{asset('images/p1.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f3" class="tab-pane fade">
    <h2 style="color:red;">BHAGAVADA SAPTHAHAM</h2>
    <img src="{{asset('images/sap1.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f4" class="tab-pane fade">
    <h2 style="color:red;">SWARGAVATHIL EKADESHI</h2>
    <img src="{{asset('images/swa1.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f5" class="tab-pane fade">
    <h2 style="color:red;">NAVARATHIRI MAHOTSAVAM</h2>
    <img src="{{asset('images/nav1.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f6" class="tab-pane fade">
     <h2 style="color:red;">MANDALA CHIRAPPU MAHOTSAVAM</h2>
    <img src="{{asset('images/ayappan.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f7" class="tab-pane fade">
    <h2 style="color:red;">THRIKARTHIKA MAHOTSAVAM</h2>
    <img src="{{asset('images/tk1.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f8" class="tab-pane fade">
    <h2 style="color:red;">VISHU KANNI</h2>
    <img src="{{asset('images/vishu.jpeg')}}" alt="" class="img-flex">
    </div>
    <div id="f9" class="tab-pane fade">
    <h2 style="color:red;">VINAYAKA CHATHURTHI</h2>
    <img src="{{asset('images/gc.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f10" class="tab-pane fade">
     <h2 style="color:red;">THIRUVATHIRA MAHOTSAVAM</h2>
    <img src="{{asset('images/thiru.jpg')}}" alt="" class="img-flex">
    </div>
    </div>
    </div>
@endsection
