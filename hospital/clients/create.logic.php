<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
	require "../db_conn.php";

		$clients = $db->escape_string($_POST["clients"]);


		$query = "insert into clients (clients) values ('$clients')";
		$result = $db->query($query);

	header("location: ./");
	exit();
	endif;
?>