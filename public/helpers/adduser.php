<?php
	include('config.php');
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	add_user($username, $password);

	function add_user($username, $password){
		global $mysqli; global $db_name;
				
		$insert_user = "insert into $db_name.users(username,password) values ($username, $password)";
		$result = $mysqli->query($insert_user) or die("Error Addind: ".$mysqli->error);
		header("Location: http://deployment-project.orchestra.io/?s=1");
	}
?>
