$('*').click(function() {
	document.getElementById('audio').play();
});


//--------------------------- Index page change [starts] -------------------------

function main() {
	$('#change1').hide('fast');
	$('#change2').hide('fast');
	$('#change3').hide('fast');
	$('#change4').hide('fast');
	$('#change5').hide('fast');
}

$('#change1-c').click(function() {
	main();
	$('#change2').show('fast');
	return false;
});

$('#change2-c').click(function() {
	main();
	$('#change3').show('fast');
	return false;
})

$('#change3-c').click(function() {
	main();
	$('#change4').show('fast');
	return false;
})

$('#change4-c').click(function() {
	main();
	$('#change5').show('fast');
	return false;
})

//--------------------------- Index page change [ends] ----------------------------
