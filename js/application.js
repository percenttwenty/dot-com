$(document).ready(function(){
	$(".new_window").click(function(event) {
		var url = $(this).attr("href");
		window.open(url);
		event.preventDefault();
	});
	
});
