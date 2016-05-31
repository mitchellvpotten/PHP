<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		//$patient = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			require "../db_conn.php";
			$id = $db->escape_string($_GET["id"]);
			$query = "select * from patient where patient_id=$id";
			$result = $db->query($query);
		
			$patient = $result->fetch_assoc();	
		endif;
		if ($patient == NULL):
			 //No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		if (isset($_POST['confirmed'])):
			require "../db_conn.php";

			// Prepare data for delete
			$id = $db->escape_string($_POST["id"]);
			// Prepare query and execute
			$query = "delete from patient where patient_id=$id";
			$result = $db->query($query);
		endif;
		
		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	endif;

?>