$(document).ready(function(){
	$("#registerblock").hide();

	$("#register").click(function(){
		$("#registerblock").toggle();
	});

	$("#registerform").submit(function(e){
		var username = $("#rusername").val();
		var password = $("#rpassword").val();
		var confpass = $("#confimpass").val();
		console.log(username);
		if(username == ""){
			$.jGrowl("The username field is blank!");
			event.preventDefault();
		}	
		if(password != confpass){
			$.jGrowl("Your passwords did not match. Please try again");
			event.preventDefault();
		}
	});	
});
