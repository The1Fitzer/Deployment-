<?php
	include('config.php');

	$query = "select * from $db_name.videos";

	$result = $mysqli->query($query) or die($mysqli->error);

	while($row = $result->fetch_object()){
		echo $row->yt_id;
	}
?>
