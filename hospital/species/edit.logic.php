<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$species = NULL;
		if (isset($_GET['id'])):
			// Get species for id
				require "../db_conn.php";
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from species where id=$id";
			$result = $db->query($query);
		
			$species = $result->fetch_assoc();		
		endif;
		if ($species == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
			require "../db_conn.php";
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$species = $db->escape_string($_POST["species"]);

		// Prepare query and execute
		$query = "update species set species='$species' where id=$id";
		$result = $db->query($query);
		
	    // Tell the browser to go back to the index page.
	    header("Location: ./");
	    exit();
	endif;

?>