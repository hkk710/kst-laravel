@extends('main')

@section('title', 'Activites')

@section('head')
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
@endsection

@section('content')

        <h1 class="text-center" style="color:#990000;"><strong><u>Activites</u></strong></h1>

        <div class="col-md-8 col-md-offset-2">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default ad-bd-40" style="background-color:#DEB781;">
                    <div class="panel-heading ad-bd-40" role="tab" id="heading1" style="background-color:#DEB781;">
                        <a class="a-b" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1" style="background-color:#DEB781;">
                            <h4 class="panel-title" style="background-color:#DEB781;">
                                <img class="img-circle" style="width: 10%; background-color:#DEB781; " src="{{asset('images/bhagavadgita.jpg')}}"></span>
                                <b class="h3">GEETHA CLASS</b>
                                <div class="caret" style="float: right; margin-top: 4%;"></div>
                            </h4>
                        </a>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                        <div class="panel-body" style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                        <p><i>Bhagavad Geetha classes where given to students of all age groups on all sundays by VC Vijaya Kumar of VSSC and Anjal Babu in the temple premises.</i> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default ad-bd-40" >
                    <div class="panel-heading ad-bd-40" role="tab" id="heading2">
                        <a class="a-b" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <h4 class="panel-title">
                                <img class="img-circle" style="width: 10%;" src="{{asset('images/kkp.jpg')}}"></span>
                                <b class="h3">KSHETRA KALAPEEDOM</b>
                                <span class="caret" style="float: right; margin-top: 4%;"></span>
                            </h4>
                        </a>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                        <div class="panel-body" style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                        <p><i>Class for PANCHAVADIYAM , CLASICAL MUSIC , DANCE , DRAWING & PAINTING , TABLA, SPOKEN ENGLISH , VIOLIN , WESTERN KEYBOARD , GUITAR , ASHTAPATHY etc are given to students of all age groups by our Kalasamskarika Peedom teachers in the temple premises.
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default ad-bd-40" style="background-color:#DEB781;">
                    <div class="panel-heading ad-bd-40" role="tab" id="heading3" style="background-color:#DEB781;">
                        <a class="a-b" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <h4 class="panel-title">
                                <img class="img-circle" style="width: 10%;" src="{{asset('images/veda.jpg')}}"></span>
                                <b class="h3">VEDA CLASS</b>
                                <div class="caret" style="float: right; margin-top: 4%;"></div>
                            </h4>
                        </a>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                        <div class="panel-body" style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                        <p><i>Veda class where given to students of all age groups on all saturday by Kalasamskarika Peedom teachers in the temple premises.</i> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default ad-bd-40">
                    <div class="panel-heading ad-bd-40" role="tab" id="heading4">
                        <a class="a-b" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <h4 class="panel-title">
                                <img class="img-circle" style="width: 10%;" src="{{asset('images/narayaneeyam.jpg')}}"></span>
                                <b class="h3">NARAYANYEEAM PARAYANAM</b>
                                <div class="caret" style="float: right; margin-top: 4%;"></div>
                            </h4>
                        </a>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                        <div class="panel-body" style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                      <p><i>Narayanyeem Parayanam where conducted on third Thursday of every month in the temple.</i> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default ad-bd-40" style="background-color:#DEB781;">
                    <div class="panel-heading ad-bd-40" role="tab" id="heading5" style="background-color:#DEB781;">
                        <a class="a-b" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <h4 class="panel-title">
                                <img class="img-circle" style="width: 10%;" src="{{asset('images/bhagavatham.jpg')}}"></span>
                                <b class="h3">BHAGAVATHA PARAYANAM</b>
                                <div class="caret" style="float: right; margin-top: 4%;"></div>
                            </h4>
                        </a>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                        <div class="panel-body" style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                      <p><i>Bhagavatha Parayanam where conducted on all Thursday of every month in the temple.</i> </p>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
            </div>
        </div>
@endsection
