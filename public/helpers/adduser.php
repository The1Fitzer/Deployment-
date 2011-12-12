<?php
	include('config.php');

	function add_user($user_array){
		global $mysqli; global $db_name;
		
		$user_id     = $user_array[0];
		$user_name   = $user_array[1];
		$first_name  = $user_array[2];
		$second_name = $user_array[3];
		$gender      = $user_array[4];
		$locale		 = $user_array[5];
		$access		 = $user_array[6];
		
		$check = "select * from $db_name.users where id = $user_id";
		$result = $mysqli->query($check);
		
		if($mysqli->affected_rows < 1){
			$insert_user = "insert into $db_name.users(id,name,first_name,second_name,gender,locale,access_token) values($user_id, "$user_name","$first_name","$second_name","$gender","$locale","$access")";
			$result = $mysqli->query($insert_user);
		}
	}
?>