<?php
$id = $_POST['idpost'];
$string = $_POST['text'];	
$codeblock = strip_tags($string);
$text = $codeblock;
$hour = date ("H:i");
$month = date ("d M Y");

//$con = mysqli_connect("localhost", "root", "", "todolist");
$con = mysqli_connect("localhost", "mpotten_admin", "9nOjlltZr", "mpotten_database");



$sql = "UPDATE activiteiten SET omschrijving = '$text', hour = '$hour', datum = '$month' WHERE id = '$id' ";
$query = mysqli_query($con, $sql);
$value = $text;
setcookie("gaben.sexy", $value, time()+63158399);
header('Location: index.php');

?>

<html>
<head>
	<meta charset="utf-8">
	<title>To do List</title>
</head>
<body>

</body>
</html>