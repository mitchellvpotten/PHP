<?php
	require "../db_conn.php";
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		
		// Prepare data for insertion
		$clients = $db->escape_string($_POST["clients"]);

		$query = "SELECT clients_id FROM clients WHERE clients='$clients'";
		$result = $db->query($query);
		$clients_id = $result->fetch_assoc();
		$clients_id = $clients_id['clients_id'];
		
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$gender = $db->escape_string($_POST["gender"]);
		
		// Prepare query and execute
		$query = "INSERT INTO patient (name, client_id, species, status, gender) VALUES ('$name', $clients_id,'$species','$status','$gender')";
		
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
		
    header("Location: ./");
	endif;

?>