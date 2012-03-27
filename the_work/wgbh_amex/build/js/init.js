$(document).ready(function(){
	//open target="_blank" links in new windows
    $("a.new_window").click(function(){
        window.open(this.href);
        return false;
    });

	//alternating-color table rows
	$("#cms_editable tr:even").css("background-color", "#f0efef");

	//auto-select "share this" links from the blog
	$(".share_this input").click(function(){
		$(this).select();
    });

//newsletter signup lightbox
	//load it when you click on the footer nav link
	$(".newsletter_signup").colorbox({href:"../newsletter/index.html #newsletter_content_only", initialWidth: 374, initialHeight: 209});	
	
	//successful submission would work something like this
	$("#newsletter_signup_form").submit(function() {
		//email validation
		//submit to mailing list server
		$.fn.colorbox({href:"../newsletter/thanks.html #newsletter_content_only"}); //thank you message
		return false;
	});
	
});
