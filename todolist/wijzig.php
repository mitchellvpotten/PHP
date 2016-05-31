<?php

	$id = $_GET['id'];

	$con = mysqli_connect("localhost", "root", "", "todolist");
	//$con = mysqli_connect("localhost", "mpotten_admin", "9nOjlltZr", "mpotten_database");

//if (mysqli_connect_errno()) {
		//echo "no connection";

	$sql = "SELECT id, omschrijving FROM activiteiten WHERE id='$id'";
	$result = mysqli_query($con, $sql);
	$output = mysqli_fetch_all($result);

//$con->close();

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="opmaak.css">
	<title>To Do List</title>
</head>
<body>
	<h1>To Do List</h1>
	<form method="post" action="update.php">
		Wijzig hier uw invoer.<br>
		<!--<input type="text" name="text" placeholder="<?=$id?>" >!-->
		<input type="hidden" name="idpost" value="<?php echo $id ?>">
		<br>
		<table>
			<?php foreach ($output as $data) { ?>
				<tr>
					<td><?=$data['1']?></td>
				</tr>
			<?php } ?>
		</table>
	</form>

<footer>&#169;2016 Mitchell van Potten - Back-end coding: Eline Boekweit&Benjamin Kemp</footer>

</body>
</html>