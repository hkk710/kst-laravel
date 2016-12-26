<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">

	    <title>KESAVAPURAM SREEKRISHNASWAMY TEMPLE</title>
	    <link rel="icon" href="{{asset('favicon.ico')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

	    <!-- Styles -->
	    <link href="/css/app.css" rel="stylesheet">
        <style media="screen">
            .ad-bd {
                border: 2px solid #ddd!important;
            }
            .ad-pd-right {
                padding: 0;
            }
            @media screen and (max-width: 992px) {
                .ad-img-first {
                    width: 100%!Important;;
                    height: 200px!Important;
                }
            }
            @media screen and (max-width: 767px) {
                .ad-img-first {
                    width: 100%!Important;;
                    height: auto!Important;
                }
            }
            @media screen and (min-width: 992px) {
                .ad-pd-right {
                    padding-right: 10px!Important;
                }
            }
        </style>
        </script>
	</head>
	<body style="background-image: url('/images/set.jpg'); background-size: 100% 100%; background-repeat: no-repeat; background-position: center top; background-attachment: fixed;">
        <div>
		    <div id="nav-main">
			    <div id="n-m-img ad-mg-btm-0">
				    <img src="{{asset('images/cover.jpg')}}" width="100%" height="600" draggable="false">
			    </div>
		    </div>
		    <div class="nav-width">
			    <nav class="navbar navbar-inverse n-m-nav ad-mg-btm-0 ">
				    <div class="container-fluid">
					    <ul class="nav navbar-nav">
						    <li><a href="{{url('/')}}"><b>Home</b></a></li>
				            <li><a href="{{url('/contact_us')}}">Contact us</a></li>
				            <li><a href="{{url('/upadevas')}}">Upadevas</a></li>
				            <li><a href="{{url('/activities')}}">Activities</a></li>
				            <li><a href="{{url('/festivals')}}">Festivals</a></li>
				            <li><a href="{{url('/facilities')}}">Facilities</a></li>
					    </ul>
			        </div>
			    </nav>
			    <marquee style="color: #990000; background-color:#fff!important; font-size:22px;">
				    <b>ഹരേ	രാമ		ഹരേ	രാമ	....രാമ	രാമ		ഹരേ	ഹരേ...........ഹരേ		കൃഷ്ണ	ഹരേ	കൃഷ്ണ.......കൃഷ്ണ കൃഷ്ണ	ഹരേ	ഹരേ...</b>
			    </marquee>
			    <div class="col-md-12 ad-pd-0">
				    <div>
				        <div class="col-md-3 ad-pd-right">
                            <div class="col-md-12 ad-bd ad-pd-0">
				    		    <div class="n-m-b-heading">
                                    <b>Dashboard</b>
                                </div>
                                <div class="ad-pd n-m-b-body" >
                                    <ul class="templatemo-submenu">
                                        <li id="change1-c">
                                            <a href="#">
                                                <i class= "fa fa-sun-o" style='color:#F14700'></i>&nbsp; &nbsp; Daily Rituals
                                            </a>
                                        </li>
                                        <li id="change2-c">
                                            <a href="#">
                                                <i class="fa fa-paper-plane" style='color:#F14700'></i>&nbsp; &nbsp; Offerings
                                            </a>
                                        </li>
                                        <li id="change3-c">
                                            <a href="#">
                                                <i class="fa fa-fire" style="color:#F14700"></i> &nbsp; &nbsp; Pooja Details
                                            </a>
                                        </li>
                                        <li id="change4-c">
                                            <a href="#">
                                                <i class= "fa fa-picture-o" style='color:#F14700'></i>&nbsp;  &nbsp; Gallery
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/online_vazhipad')}}">
                                                <i class= "fa fa-credit-card-alt" style='color:#F14700'></i> &nbsp; Online Vazhipad
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 ad-bd" style="margin-top: 15px; margin-bottom: 15px;">
                                <div class="n-m-b-heading"><b>News Update</b></div>
                                <div>
                                    <ul class="templatemo-submenu" style="background-color:#990000; margin: 0!Important;">
                                        <marquee scrolldelay="200" direction="up" style="width: 100%; background: yellow;">
                                            <a href="#" style="color:#990000;">Navarathri</a>
                                            <br>
                                            <a href="#" style="color:#990000;">Pallikettu</a>
                                            <br>
                                            <a href="#" style="color:#990000;">Sapthaham</a>
                                            <br>
                                            <a href="#" style="color:#990000;">Vishukanai</a>
                                            <br>
                                            <a href="#" style="color:#990000;">Vishukanai</a>
                                            <br>
                                            <a href="#" style="color:#990000;">Ashttamirohini Maholsavam</a>
                                            <br>
                                            <br>
                                        </marquee>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
				    <div class="col-md-9 ad-bd ad-pd-0" style="background-color:#f48f42">
				    	<div class="n-m-b-heading"></div>
                        <div class="ad-pd">
                            <div class="col-sm-3 col-md-3 text-center" style="padding-left: 40px; padding-right: 40px; padding-top: 20px;">
                                <img src="{{asset('images/kannan.jpg')}}" class="img-circle ad-img-first" style="width: 90%;" draggable="false">
                            </div>
                            <div class="col-sm-9 col-md-9" style="color: #4700b3; background-image: url('/images/test.jpg'); background-size: 100% auto; background-repeat: no-repeat;">
                                <div id="change1">
                                    <h1 class="text-center" style="color:#a5011f"><br><strong>ശ്രീകൃഷ്ണധ്യാനം</strong></h1>
                                    <br>
                                    <br>
                                    <br>
                                    <h3 class="text-center">
                                        കസ്തൂരി തിലകം ലലാട ഫലകേ
                                        <br>
                                        വക്ഷസ്ഥലേ കൗസ്തുഭം
                                        <br>
                                        നാസാഗ്രേ നവ  മൗക്തികം കരതലേ
                                        <br>
                                        വേണും കരേ കങ്കണം
                                        <br>
                                        സർവ്വാംഗേ ഹരിചന്ദനം ചകലയൻ
                                        <br>
                                        കണ്ധെ ച മുക്താ വലീം
                                        <br>
                                        ഗോപസ്ത്രീ പരിവേഷ്ട്ടിതോ വിജയതേ
                                        <br>
                                        ഗോപലച്ചുധാമണി
                                        <br>
                                        <br>
                                        സാരം :  നെറ്റിയിൽ കസ്തൂരിതിലകം.
                                        <br>
                                        മാറിൽ കൗസ്തുഭമണി, മൂക്കിൽ പവിഴം
                                        <br>
                                        പതിച്ച നാസാമണി, കരതളിരുകളിൽ
                                        <br>
                                        വേണു, കൈത്തണ്ടയിൽ  കങ്കണം
                                        <br>
                                        ദേഹമാസകലം ചന്ദനം, കഴുത്തിൽ
                                        <br>
                                        മുത്തുമാല, അങ്ങനെ ഗോപാലന്മാർക്കു
                                        <br>
                                        ശിരോലങ്കാരമായ കൃഷ്ണൻ
                                        <br>
                                        ഗോപാംഗനകളാൽ ചുറ്റപ്പെട്ട്  വിജയിച്ചരുളുന്നു.
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </h3>
                                </div>
                                <div id="change2" style="display: none;">
                                    <h1 class="text-center"><span style="color:#a5011f"><b><br>&nbsp; &nbsp; Daily Rituals</b></span></h1>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <h4 class="text-center">
                                        <p><span style="color:#a5011f;"> MORNING</span></p>
                                        5.00 :
                                        PALLIYUNARTHU <br>
                                        5.10 :
                                        NIRMALYADARSANAM<br>
                                        5.35 :
                                        ABHISHEKAM<br>
                                        5.45 :
                                        GANAPATHY HOMAM <br>
                                        6.00 :
                                        DEEPARADHANA <br>
                                        6.30 :
                                        USHA POOJA <br>
                                        6.40 :
                                        DEEPARADHANA<br>
                                        8.30 :
                                        NIVEDHYAM<br>
                                        9.00 :
                                        PRASANNA POOJA<br>
                                        10.00 :
                                        NIVEDHYAM<br>
                                        11.00 :
                                        UCHA POOJA<br>
                                        11.30 :
                                        NADA ADAKUNNU<br>
                                        <br>
                                        <br>
                                        <p> <span style="color:#a5011f;">EVENING</span></p>
                                        5.00 : NADA THURAPPU <br>
                                        6.45 :
                                        DEEPARADHANA<br>
                                        7.30 :
                                        ATHAZHA POOJA <br>
                                        8.00 :
                                        DEEPARADHANA <br>
                                        8.05 :
                                        NADA ADAKUNNU<br>
                                        <br>
                                        <div class="alert alert-info " role="alert">
                                            POOJA TIMINGS MAY BE ALTERED ON SPECIAL OCCASIONS<br>
                                            Besides these "Kunjoonu" (Choroonu - first rice feeding ceremony for children) <br>Thulabharam, Vidyarambham, Archana etc.<br> can be done at this temple.<br>
                                        </div>
                                        <br>
                                        <br>
                                    </h4>
                                </div>
                                <div id="change3" style="display: none;">

                                    <h1 class="text-center"><span style="color:#a5011f"><b><br>Offerings</b></span></h1>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <h4 class="text-center">
                                        <b>
                                            May the blessings of God SREEKRISHNA SWAMI <br>be bestowed upon you,
                                            <br> reduce agony and save lives <br>through the limitless showering of His mercy.
                                            <br>
                                            <br>
                                            Contributions are welcome from individuals and organisations.
                                            <br>
                                            <br>
                                            <br>
                                            <div class= "text-center" >
                                                Cheques and drafts drawn in favour of
                                                "Secretary,<br> KESAVAPURAM SREEKRISHNA SWAMI TEMPLE TRUST"
                                                <br> sent to the following address.
                                                <br>
                                                <br>
                                                Secretary<br>
                                                KESAVAPURAM SREEKRISHNA SWAMI TEMPLE TRUST<br>
                                                MARUTHAMKUZHY<br>
                                                THIRUVANANTHAPURAM<br>
                                                PIN CODE -695 030<br>
                                                PH -0471 2362600<br>
                                                <br>
                                                <br>
                                                <br></b>
                                            </div>
                                        </b>
                                    </h4>
                                </div>
                                <div id="change4" style="display:none;">
                                    <h1 class="text-center"><span style="color:#a5011f;"><b><br>Pooja Details</b></span></h1>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-md-9 col-md-offset-2">
                                    <img class="img" src="{{asset('images/pooja.JPG')}}" style="width: 100%;">
                                    </div>
                                </div>
                                <div id="change5" style="display: none;">
                                    <h1 class="text-center"><span style="color:#a5011f"><b><br>Gallery</b></span>
                                    </h1>
                                    <br>
                                    <br>
                                    <div class="col-xs-3 col-md-12">
                                        <div class="col-md-6">
                                            <a href="{{url('/gallery1')}}"><img class="img-index" src="{{asset('images/dummyimage.png')}}" style="width: 100%;"></a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{url('/gallery2')}}"><img class="img-index" src="{{asset('images/dummyimage.png')}}" style="width: 100%;"></a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{url('/gallery3')}}"><img class="img-index" src="{{asset('images/dummyimage.png')}}" style="width: 100%;"></a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{url('/gallery4')}}"><img class="img-index" src="{{asset('images/dummyimage.png')}}" style="width: 100%;"></a>
                                        </div>
                                    </div>
                                </div>
				            </div>
                        </div>
				    </div>
				</div><!--row-->
			</div><!--col-md-12-->
		</div><!--Main div-->
		@include('partials._footer')
		@include('partials._audio')
		@include('partials._js')
	</body>
</html>
