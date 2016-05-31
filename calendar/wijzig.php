<?php
	$id = $_GET['id'];

	//$con = mysqli_connect("localhost", "root", "", "calendar");
	$con = mysqli_connect("localhost", "mpotten_admin", "9nOjlltZr", "mpotten_database");

if (mysqli_connect_errno()){
		echo "no connection";
}

	$sql = "SELECT * FROM birthdays WHERE id='$id'";
	$result = mysqli_query($con, $sql)
	or die(mysqli_error($con)); 	
	$output = mysqli_fetch_all($result);

//$con->close);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Calendar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
	<h1>Wijzig hier uw invoer.<br></h1>
	<form method="post" action="update.php">
		<input type="hidden" name="id" value="<?= $id ?>">
		<input type="text" name="person" placeholder="naam"> 
	
		<?php
		if (isset($_POST['toevoegen'])) {
		$string = $_POST['toevoegen'];		 
		$codeblock = strip_tags($string);
		$toevoegen = $codeblock;
		$sql = "INSERT INTO birthdays (omschrijving, hour, datum) VALUES ('$toevoegen', '$hour', '$month')"; 
		$result = mysqli_query($con, $sql);
		$value = $toevoegen;
		setcookie("gaben@sexy", $value, time()+63158399);
	} ?>

		<select name="day">
<?php
  for ($i = 1; $i <= 31; ++$i) {

    // $day = strtotime(sprintf('-%d days',$i));
    // $value = date('d', $day);
    // $label = $value;
    printf('<option value="%s">%s</option>', $i, $i);
  }
  ?>
	</select>


	<select name="month">
<?php
  for ($i = 1; $i <= 12; ++$i) {
    // $time = strtotime(sprintf('-%d months',$i));
    // $value = date('m', $time);
    // $label = date('F ', $time);
    printf('<option value="%s">%s</option>', $i, $i);
  }
  ?>
	</select>

	<select name="year">
<?php
	for ($i = 0; $i <= 65; ++$i) {
		$year = strtotime(sprintf('-%d years',$i));
		$value = date('Y', $year);
		$label = $value;
		printf('<option value="%s">%s</option>', $value, $label);

	}
?>
		</select>
		<input type="submit" value="submit">
	</form>
</body>
</html>