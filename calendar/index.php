<?php
	$con = mysqli_connect("localhost", "mpotten_admin", "9nOjlltZr", "mpotten_database");
    //$con = mysqli_connect("localhost", "root", "", "calendar");
    error_reporting(0);
    if (mysqli_connect_errno()) {
		echo "no connection";
	}

    if (isset($_GET['delete']) and isset($_GET['id'])) {
    	$delete = $_GET['delete'];
    	$id = $_GET['id'];
    } else {
    	$delete = '';
    	$id = '';
    }

    if ($delete) {
    	mysqli_query($con, "DELETE FROM birthdays WHERE id = '$id'");
    }
	$sql = "SELECT * FROM birthdays ORDER BY day";
	$result = mysqli_query($con, $sql)
	or die(mysqli_error($con));
	$birthdays = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$months = cal_info(1);
	$months = $months['months'];
?>

<!doctype html> 

<html>
	<head>
		<title>Calendar</title>
     	<meta charset="utf-8">
     	<link href="style.css" rel="stylesheet" type="text/css">

  	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

	</head>
<body>
<p><a href="add.php">+ Toevoegen</a></p>
	
<?php 
	$i = 1;
	foreach ($months as $month) {
			echo "<h1>".$month . "<br>"."</h1>";
		foreach ($birthdays as $birthday) { 
			if ($birthday['month'] == $i){ ?>
			<a href="wijzig.php?id=<?=$birthday['id'] ?>"><?=$birthday['person'];?></a>
			<?= " " .  $birthday['day'], " ".  $birthday['year'];	?>
			<a href='index.php?delete=true&id=<?=$birthday['id']; ?>'> x </a> <br> <?php 
			
				}
			}
			$i++; }
	  
	
?>
<br>
<footer>&#169;2016 Mitchell van Potten</footer>
</body>
</html>
