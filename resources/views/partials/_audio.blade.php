<audio hidden id="audio">
	<source src="{{ asset('sounds/click.mp3') }}" type="audio/mp3">
</audio>
<audio hidden loop autoplay id="back-audio">
	<source src="{{ asset('sounds/back.mp3') }}" type="audio/mp3">
</audio>
<div class="ad-icon text-right" style="left: auto; right: 0;">
	<li><a href="#" class="audio-pause" id="audio-control"><i id="audio-fa" class="fa-1 fa fa-pause fa-ad" style="background: #888;"></i></a></li>
</div>
<script type="text/javascript">
	$('#audio-control').click(function(e) {
		var audio = document.getElementById('back-audio');
		if (this.className == "audio-play") {
			this.className = "audio-pause";
			document.getElementById('audio-fa').className = "fa-1 fa fa-pause fa-ad";
			audio.play();
		}
		else if (this.className == "audio-pause") {
			this.className = "audio-play";
			document.getElementById('audio-fa').className = "fa-1 fa fa-play fa-ad";
			audio.pause();
		}
	});
</script>
