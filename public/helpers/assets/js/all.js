$(document).ready(function(){
	$("#registerblock").hide();

	$("#register").click(function(){
		$("#registerblock").toggle();
	});

	$("#registerform").submit(function(){
		$this = $(this);
		var username = $("#rusername").val();
		var password = $("#rpassword").val();
		var confpass = $("#confimpass").val();
		
		if(password != confpass){
			$.jGrowl("Your passwords did not match. Please try again");
		}
	});	
});
