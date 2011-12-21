$(document).ready(function(){
	$("#registerblock").hide();

	$("#register").click(function(){
		$("#registerblock").toggle();
	});

	$("#registerform").submit(function(e){
		var username = $("#rusername").val();
		var password = $("#rpassword").val();
		var confpass = $("#confimpass").val();
		console.log(password);
		console.log(password);
		if(username == ""){
			$.jGrowl("The username field is blank!");
			event.preventDefault();
		}	
		if(password === confpass){
			$.ajax({
				url: 'helpers/adduser.php',
				type: 'POST',
				data: {username:username,password:password},
				success:function(data){
					if(data === 1){
						$.jGrowl('Registration Complete');
						$("#registerblock").hide();
					}else{
						$.jGrowl('Registration not successful');
					}
				{
			});
		}
	});	
});
