<?php
	include('config.php');
	$yt_array = array();
	$query = "select * from $db_name.videos";

	$result = $mysqli->query($query) or die($mysqli->error);

	while($row = $result->fetch_object()){
		$yt_array[] = $row->yt_id;
	}
	print_r($yt_array);
?>
