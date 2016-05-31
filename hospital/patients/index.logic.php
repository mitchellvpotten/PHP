<?php
	
require "../db_conn.php";
 $query = "SELECT * FROM patient LEFT JOIN clients ON clients.clients_id=patient.client_id";
  
 $order = isset($_GET['sort']) ? $_GET['sort'] : 'name';
 $ascdesc = isset($_GET[ 'ascdesc']) ? $_GET['ascdesc'] : 'asc';

 if(isset($ascdesc) and $ascdesc == "asc"){
 	$ascdesc = "desc";
 }else{
 	$ascdesc = "asc";
 }

 	$query .= " ORDER BY $order $ascdesc";

  	$result = $db->query($query);

  	$patients = $result->fetch_all(MYSQLI_ASSOC);

?>