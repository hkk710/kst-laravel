<style>
    .main-footer {
        padding-top: 10px;
        font-size: 14px;
        border-top: 2px solid #fff;
        color: white;
        margin-top: 20px;
        z-index: 99;
    }
    .main-footer a {
        color: #fff!Important;
    }
</style>
<footer class="site-footer main-footer" style="background-color:#CA8F44; width:100%; box-shadow: 0 0 25px 1px #fff; overflow: hidden;">
	<div class="container" style="text-align: center;">
		<p style="margin-bottom: 1.1vh">
			Copyright © 2017 | All rights reserved | Developed by <a href="http://www.hkwebdevelopers.weebly.com">
			Kesavapuram Brothers</a> and <a href="http://advaitharunjeena.wixsite.com/advaith">Advaith</a>
		</p>
	</div>
</footer>
<script>
    $(document).ready(function() {
        var body = $('body').height();
        var windo = $(window).height();
        if (windo > body) {
            $('footer').css({'position' : 'absolute', 'bottom' : 0})
        }
    });
</script>
