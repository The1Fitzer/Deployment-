<?php
	include('config.php');
	function get_vids2(){
		global $db_name, $mysqli;
		$yt_array = array();
		$query = "select * from $db_name.videos limit 3,3";

		$result = $mysqli->query($query) or die($mysqli->error);

		while($row = $result->fetch_object()){
			$yt_array[] = $row->yt_id;
		}
		return $yt_array;
	}
?>
