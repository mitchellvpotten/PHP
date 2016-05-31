<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$clients = NULL;
		if (isset($_GET['id'])):
			// Get clients for id
				require "../db_conn.php";
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from clients where clients_id=$id";
			$result = $db->query($query);
		
			$clients = $result->fetch_assoc();		
		endif;
		if ($clients == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
			require "../db_conn.php";
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$clients = $db->escape_string($_POST["clients"]);
		
		// Prepare query and execute
		$query = "UPDATE clients set clients='$clients' where clients_id=$id";
		$result = $db->query($query);
	
	    // Tell the browser to go back to the index page.
	    header("Location: ./");
	    exit();
	endif;

?>