<?php
	include('config.php');
	
	$user_name = $_POST['username'];
	$password = $_POST['password'];

	add_user($user_name, $password);

	function add_user($user_name, $password){
		global $mysqli; global $db_name;
				
		$insert_user = "insert into $db_name.users (username,password) values ('$user_name', '$password')";
		$result = $mysqli->query($insert_user) or die("Error Addind: ".$mysqli->error);
		header("Location: http://deployment-project.orchestra.io/?s=1");
	}
?>
