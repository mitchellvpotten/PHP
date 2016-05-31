<?php
//$con = mysqli_connect("localhost", "root", "", "calendar");
$con = mysqli_connect("localhost", "mpotten_admin", "9nOjlltZr", "mpotten_database");

if (mysqli_connect_errno()) {
		echo "no connection";
	}
	$id = $_POST['id'];
	$person = $_POST['person'];
	$person = strip_tags($person);
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$sql = "UPDATE birthdays SET person='" . $person . "', day='" . $day . "', month='" . $month . "', year='" . $year . "' WHERE id ='" . $id . "' ";
	$result = mysqli_query($con,$sql);

if (isset($string)){
	$string =$toevoegen;
	$toevoegen = strip_tags($string);
}

header('Location: index.php');
?>

<html>
<head>
	<meta charset="utf-8">
	<title>To do List</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>

</body>
</html>