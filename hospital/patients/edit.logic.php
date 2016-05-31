<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
				require "../db_conn.php";
			$id = $db->escape_string($_GET["id"]);	
			
			$query = "select * from patient where patient_id=$id";
			$result = $db->query($query);
			$patient = $result->fetch_assoc();
			$patient_client = $patient['client_id'];
			//var_dump($patient_client);
			//var_dump($client);
		
		endif;
		if ($patient == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
			require "../db_conn.php";
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$gender = $db->escape_string($_POST["gender"]);
		//$clients = $db->escape_string($_POST["clients"]);


		// Prepare query and execute
		$query = "update patient set name='$name', species='$species', status='$status', gender='$gender' where patient_id=$id";
		$result = $db->query($query);

    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>