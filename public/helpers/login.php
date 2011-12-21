<?php
	include('config.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(isset($username)){
		login($username, $password);
	}else{
		header("Location: http://deployment-project.orchestra.io/?s=2");
	}

	function login($username, $password){
		global $db_name, $mysqli;
		//check for user
		$check = "select * from $db_name.users where username = '$username'";
		$result = $mysqli->query($check) or die($mysqli->error);
		$check2 = $result->fetch_object()->username;
		
		if(isset($check2)){
			while($row = $result->fetch_object()){
				$id = $row->id;
			}
			echo "$id<br/><br/>"	
			$time = time() + 3600;
			setcookie('username', $username, $time);
			setcookie('id', $id, $time);
			print_r($_COOKIE);
			die();
			header('Location: http://deployment-project.orchestra.io/?s=4');

		}else{
			header('Location: http://deployment-project.orchestra.io/?s=3');
		}
	}
?>
