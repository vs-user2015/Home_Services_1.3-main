// validate form
$("#form16").validate();

//open contact form
$("#contact-button , #email").click(function () {
	$(".overlay").css({"opacity" : 1 , "z-index" : 5});
	
});
	
//close contact form
$("#cancel-form").click(function () {
	$(".overlay").css({"z-index" : -1 , "opacity" : 0});
});