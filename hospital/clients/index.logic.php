<?php
	
	require "../db_conn.php";

	$query = "select * from clients";
	$result = $db->query($query);
	
	$clients = $result->fetch_all(MYSQLI_ASSOC);
?>