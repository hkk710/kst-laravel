<!DOCTYPE html>
<html lang="en">
<head>
<body>
    <meta charset="UTF-8">
    <title>Title</title>
   <html>
    <head>
        <style>.ad-ps {
    width: 32%;
    position: absolute;
    top: 32%;
    left: 55%;
    transform: rotate(357deg);
    box-shadow: 0 0 20px 1px #333;
}
.ad-ps-2 {
    position: absolute;
    top: 32%;
    left: 15%;
    width: 32%;
}
.ad-textarea {
    width: 100%;
    height: 100px!Important;
    max-width: 100%;
    max-height: 100px!Important;
}
.ad-ps-3 {
    position: absolute;
    top: 17%;
    left: 17.5%;
}
.b {
    text-shadow: 2px 2px 2px #000;
    color: #fff;
    font-size: 20px;
}
.red {color: red; font-size: 18px;}
.ad-icon {
    position: absolute;
    left: 0;
    top:45%;
}
            .fa {
                padding-top: 15%!important;
                text-align: center;
                font-size: 25px!important;
                color: white;
                width: 40px;
                height: 40px;
                -moz-transition: 0.5s;
                -ms-transition: 0.5s;
                -o-transition: 0.5s;
                transition: 0.5s;
                opacity: 0.8;
                border-top-right-radius: 100%;
                border-bottom-right-radius: 100%;
            }
            .fa:hover {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
                width: 70px;
                padding-top: 15%!important;
                opacity: 1;
            }
            .fa-facebook {background: #3b5998;}
            .fa-linkedin {background: #007bb6;}
            .fa-google-plus {background: #dd4b39;}

</style>
        <link rel="stylesheet" href="{% static 'css/bootstrap.css' %}">
        <link rel="stylesheet" href="{% static 'css/font-awesome.min.css' %}">
    </head>
    <body>
         <img src="{% images 'book-background-12.jpg' %}" width="100%" height="100%">
         <div class="ad-top">
            <div class="ad-ps-3 text-center">
                <b class="b">Kesavapuram Sreekrishnaswamy Temple<br><span class="red"> Kesavapuram road,Maruthamkuzhy</span></b>
            </div>
            <div class="ad-ps-2">
                <form>
                    <input class="form-control" placeholder="Name...*"><br>
                    <input class="form-control" placeholder="Email...*" type="email"><br>
                    <textarea class="form-control ad-textarea" placeholder="Your valuable feedback...*"></textarea><br>
                    <input type="submit" class="btn btn-success" value="Send">
                </form>
            </div>
            <div class="ad-ps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.8382981887175!2d76.97576531432411!3d8.515076199171652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05ba3ac5565547%3A0xddcb74252996ab11!2sKeshavapuram+Srikrishna+Swamy+Temple!5e0!3m2!1sen!2sin!4v1470540912162" frameborder="0" style="border:0; width: 100%; height: 55%;" allowfullscreen></iframe>
                </iframe>
            </div>
             <div class="ad-icon">
                 <li><a href="#"><i class="fa fa-facebook fa-ad"></i></a></li>
                 <li><a href="#"><i class="fa fa-linkedin fa-ad"></i></a></li>
                 <li><a href="#"><i class="fa fa-google-plus fa-ad"></i></a></li>
             </div>
        </div>
    </body>
</html>
</head>
</body>
</html>