<?php

		require "../db_conn.php";

	$query = "select * from species";
	$result = $db->query($query);

	$species = $result->fetch_all(MYSQLI_ASSOC);

?>