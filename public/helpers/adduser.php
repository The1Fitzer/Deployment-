<?php
	include('config.php');
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	add_user($username, $password);

	function add_user($username, $password){
		global $mysqli; global $db_name;
				
		$check = "select * from $db_name.users where username = $username";
		$result = $mysqli->query($check) or die("Select Error: ".$mysqli->error);
		
		if($mysqli->affected_rows < 1){
			$insert_user = "insert into $db_name.users('username','password') values ($username, $password)";
			$result = $mysqli->query($insert_user);
			print 1;
		}else{
			print -1;
		}
	}
?>
