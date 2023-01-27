$(document).ready(function() {
	$("li div").hide();
	$("li").hover(function() {
		$("div", this).slideDown();
	}, function(){

	});
});