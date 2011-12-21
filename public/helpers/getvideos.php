<?php
	include('config.php');

	$query = "select * from $db_name";

	$result = $mysqli->query($query) or die($mysqli->error);
?>
