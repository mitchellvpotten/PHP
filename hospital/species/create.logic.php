<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
			require "../db_conn.php";

		$species = $db->escape_string($_POST["species"]);


		$query = "insert into species (species) values ('$species')";
		$result = $db->query($query);

	header("location: ./");
	exit();
	endif;
?>