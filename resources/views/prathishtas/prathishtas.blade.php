@extends('main')
@section('title', 'Festivals')
@section('head')
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
@endsection
@section('content')
    <div class="text-center"><h1 style="color:#fff;">UPADEVAS</h1></div>
        <div class="container">
        <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" style="color:red;" href="#f1"><b>GANAPATHY</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f2"><b>DEVI</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f3"><b>NAGAR</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f4"><b>BRAHMA REKSHASU</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f5"><b>REKSHASU</b></a></li>
      </ul>
    </div>
    <div class="tab-content text-left container-fluid">
        <div id="f1" class="tab-pane active">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-6">
                        <img src="{{asset('images/ganesh.jpg')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="col-sm-6">
                        <h2 style="color:red;" class="text-center"><u>GANAPATHY</u></h2>
                        <div style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                            <p>Ganesha also known as Ganapati and Vinayaka, is one of the best-known and most worshipped deities in the Hindu pantheon. His image is found throughout India, Sri Lanka and Nepal. Hindu sects worship him regardless of affiliations. Devotion to Ganesha is widely diffused and extends to Jains and Buddhists.</p>

                            <p>Although he is known by many attributes, Ganesha's elephant head makes him easy to identify. Ganesha is widely revered as the remover of obstacles, the patron of arts and sciences and the deva of intellect and wisdom. As the god of beginnings, he is honoured at the start of rituals and ceremonies. Ganesha is also invoked as patron of letters and learning during writing sessions. Several texts relate mythological anecdotes associated with his birth and exploits and explain his distinct iconography.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="f2" class="tab-pane fade">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-6">
                        <img src="{{asset('images/devi.jpg')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="col-sm-6">
                        <h2 style="color:red;" class="text-center"><u>DEVI</u></h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="f3" class="tab-pane fade">
        <h2 style="color:red;">NAGAR</h2>
        <img src="{{asset('images/nagar.jpg')}}" alt="" class="img-flex">
        </div>
        <div id="f4" class="tab-pane fade">
        <h2 style="color:red;">BRAHMA REKSHASU</h2>
        <img src="{{asset('images/swa1.jpg')}}" alt="" class="img-flex">
        </div>
        <div id="f5" class="tab-pane fade">
        <h2 style="color:red;">REKSHASU</h2>
        <img src="{{asset('images/nav1.jpg')}}" alt="" class="img-flex">
        </div>
    </div>
    </div>
@endsection
