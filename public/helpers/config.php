<?php
	//Database Connection
	$db_name = 'db_ce82f697';
	$db_host = 'a.db.shared.orchestra.io';
	$db_user = 'user_ce82f697';
	$db_pass = 'vnu&c4)J)f2tGt';
	
	$mysqli = new mysqli($db_host, $db_user, $db_pass);
	
	if(mysqli_connect_errno()){
		print("Connection Failed: " . mysqli_connect_error());
		exit();
	}
?>