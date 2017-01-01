@extends('main')
@section('title', 'Festivals')
@section('content')
    <div class="text-center"><h1 style="color:#990000;">FESTIVALS</h1></div>
    <div class="container" >
        <ul class="nav nav-tabs" style="font-size:15px;" >
            <li class="active"><a data-toggle="tab" style="color:#990000;" href="#f1"><b>JANMASHTAMI MAHOTSAVAM</b></a></li>
            <li><a data-toggle="tab" style="color:#990000;" href="#f2"><b>PRETHISHTA DHINAM</b></a></li>
            <li><a data-toggle="tab" style="color:#990000;" href="#f3"><b>BHAGAVADA SAPTHAHAM</b></a></li>
            <li><a data-toggle="tab" style="color:#990000;" href="#f4"><b>SWARGAVATHIL EKADESHI</b></a></li>
            <li><a data-toggle="tab" style="color:#990000;" href="#f5"><b>NAVARATHIRI MAHOTSAVAM</b></a></li>
            <li><a data-toggle="tab" style="color:#990000;" href="#f6"><b>MANDALA CHIRAPPU MAHOTSAVAM</b></a></li>
            <li><a data-toggle="tab" style="color:#990000;" href="#f7"><b>THRIKARTHIKA MAHOTSAVAM</b></a></li>
            <li><a data-toggle="tab" style="color:#990000;" href="#f8"><b>VISHU KANNI</b></a></li>
            <li><a data-toggle="tab" style="color:#990000;" href="#f9"><b>VINAYAKA CHATHURTHI</b></a></li>
            <li><a data-toggle="tab" style="color:#990000;" href="#f10"><b>THIRUVATHIRA MAHOTSAVAM</b></a></li>
        </ul>
    </div>
    <div class="tab-content text-center container-fluid" >
        <div id="f1" class="tab-pane active text-center" >
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-6">
                        <img src="{{asset('images/festival1.jpg')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="col-sm-6">
                        <h2 style="color:red;">JANMASHTAMI MAHOTSAVAM (6 DAYS)</h2>
                        <div style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                            // Here
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="f2" class="tab-pane fade">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-6">
                        <img src="{{asset('images/p1.jpg')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="cols-m-6">
                        <h2 style="color:red;">PRETHISHTA DHINAM (1 DAY)</h2>
                        <div style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                            // Here
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="f3" class="tab-pane fade">
            <div class="panel panel-default">
                <div class="panel-body" style="background-color:#746D67;">
                    <div class="col-sm-6">
                        <img src="{{asset('images/sap1.jpg')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="col-sm-6">
                        <h2 style="color:#990000;">BHAGAVADA SAPTHAHAM</h2>
                        <div style="margin-top: 20px; color: #fff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                            <p>It all started in the forest of Naimisaranya the sages of Sounagathi approached Suta, enquired about Bhagavatam. Naradha Muni approached Vyasa to give Bhagavatam to this world.</p>

                           <p> Vysa under the direction of Narada Muni , his spiritual master wrote and compiled Srimad Bhagavatam. After Compiling the Bhagavatam, Vysa imparted the Bhagvatam to his son Suka Bramha rishi.</p>

                            <p>Sukabrahma rishi subsequently recited the entire Bhagavatam to Maharaja parikshit in an assembly of learned saints on the bank of the Ganges at Hastinapura (now Delhi). Maharaja parikshit was the emperor of the world and was a great rajarsi (saintly king). Having received the curse that he would die within a week, he renounced his entire kingdom and retired to the bank of the Ganges to fast until death and receive spiritual enlightenment.</p>

                            <p>Sukabrahma rishi, in response to the various questions raised by posed by Maharaja parikshit, concerning everything from the nature of the self to the origin of the universe, held the assembled sages in rapt attention continuously for the seven days (SAPTHAHAM) leading up to the king's death.</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="f4" class="tab-pane fade">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-6">
                        <img src="{{asset('images/swa1.jpg')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="col-sm-6">
                        <h2 style="color:red;">SWARGAVATHIL EKADESHI</h2>
                        <div style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                            // Here
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="f5" class="tab-pane fade">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-6">
                        <img src="{{asset('images/nav1.jpg')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="col-sm-6">
                        <h2 style="color:red;">NAVARATHIRI MAHOTSAVAM</h2>
                        <div style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                            // Here
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="f6" class="tab-pane fade">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-6">
                        <img src="{{asset('images/ayappan.jpg')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="col-sm-6">
                        <h2 style="color:red;">MANDALA CHIRAPPU MAHOTSAVAM</h2>
                        <div style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                            // Here
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="f7" class="tab-pane fade">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-6">
                        <img src="{{asset('images/tk1.jpg')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="col-sm-6">
                        <h2 style="color:red;">THRIKARTHIKA MAHOTSAVAM</h2>
                        <div style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                            // Here
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="f8" class="tab-pane fade">
            <div class="panel panel-default">
                <div class="panel-body" style="background-image: url('/images/vishukani1.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="col-sm-6">
                        <img src="{{asset('images/vishu.jpeg')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="col-sm-6" style="background-image: url('/images/vishukani1.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <h2 style="color:red;">VISHU KANNI</h2>
                        <div style="margin-top: 20px; color: #000; font-size: 20px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                            <p>Vishu (Malayalam: വിഷു) is a Hindu festival primarily celebrated in the Indian state of Kerala, which marks the beginning of the harvest year.Vishu falls on the month of Medam in the Malayalam calendar, usually in the second week of April in the Gregorian calendar.</p>
                            <p>The most important event in Vishu is the Vishukkani, which literally means "the first thing seen on the day of Vishu after waking up". The Vishukkani consists of a ritual arrangement of auspicious articles intended to signify prosperity, including rice, fruits and vegetables, betel leaves, arecanut, metal mirror, yellow flowers called konna (Cassia fistula), holy texts and coins, all arranged around lord Krishna in an ambience lit by nilavilakku </p>
                            <p>Devotees from all arround kerala reach the temple to have look at lord Sreekrishna on the day and to receive Vishukkaineetam melshanthi</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="f9" class="tab-pane fade">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-6">
                        <img src="{{asset('images/gc.jpg')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="col-sm-6">
                        <h2 style="color:red;">VINAYAKA CHATHURTHI</h2>
                        <div style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                            // Here
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="f10" class="tab-pane fade">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-6">
                        <img src="{{asset('images/thiru.jpg')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="col-sm-6">
                        <h2 style="color:red;">THIRUVATHIRA MAHOTSAVAM</h2>
                        <div style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                            // Here
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
