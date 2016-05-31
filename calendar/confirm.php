<?php
	//$con = mysqli_connect("localhost", "root", "", "calendar");
	$con = mysqli_connect("localhost", "mpotten_admin", "9nOjlltZr", "mpotten_database");

if (mysqli_connect_errno()) {
		echo "no connection";
	}

if (isset($_POST['person'],$_POST['day'],$_POST['month'],$_POST['year'])){
	$person = $_POST['person'];
	$person = strip_tags($person);
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$sql = "INSERT INTO birthdays (person,day,month,year) VALUES ('$person', '$day', '$month', '$year')"; 
	$result = mysqli_query($con,$sql);

if (isset($string)){
	$string =$toevoegen;
	$toevoegen = strip_tags($string);
}
}


//$con->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>calendar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>

<?php
	header("Refresh: 2; url=index.php");
	echo 'data has been sent, You will return in about 2 seconds.';
?>
<button>click here to go back</button>

</body>
</html>