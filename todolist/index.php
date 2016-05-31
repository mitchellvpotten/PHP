<?php
	$con = mysqli_connect("localhost", "mpotten_admin", "9nOjlltZr", "mpotten_database");
	//$con = mysqli_connect("localhost", "root", "", "todolist");


	$hour = date ("H:i");
	$month = date ("d M Y");

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

	if ($delete == "true") {
		mysqli_query($con, "DELETE FROM activiteiten WHERE id = '$id'");
	}

	if (isset($_POST['toevoegen'])) {
		$string = $_POST['toevoegen'];		 
		$codeblock = strip_tags($string);
		$toevoegen = $codeblock;
		$sql = "INSERT INTO activiteiten (omschrijving, hour, datum) VALUES ('$toevoegen', '$hour', '$month')"; 
		$result = mysqli_query($con, $sql);
		$value = $toevoegen;
		setcookie("gaben@sexy", $value, time()+63158399);
	}

	$sql = "SELECT id, omschrijving FROM activiteiten";
	$result = mysqli_query($con, $sql);
	$output = mysqli_fetch_all($result);

	//var_dump($output);
	?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="opmaak.css">
	<title>To do List</title>
</head>

<body>
<header>
<h1>To Do List</h1>
</header>
<div class="content">
	<form method="post">
		Wat wil je toevoegen aan je lijst?<br>
		<input type="text" name="toevoegen" id="toevoegen">

		<br>
		<table>
		<?php foreach ($output as $data) { ?>
			<tr>
				<td><?=xss_clean($data['1'] )?></td>
				<td><a href='add.php?id=<?=xss_clean($data['0'])?>'>update</a><br></td>
				<td><a href='index.php?delete=true&id=<?=xss_clean($data['0'])?>'>delete</a><br></td>
				
			</tr>
		<?php } ?>
	</form>
	</table>
</div>
	<a href="../index.html"><img class = afbeelding src ="../Pijl2.png"></a>
	<h3>Terug naar de hoofdpagina</h3>	 

<footer><a href="disclaimer.html">Disclaimer<br>&#169;2016 Mitchell van Potten - Back-end coding: Eline Boekweit & Ben Kemp</footer>

</body>
</html>

<?php

function xss_clean($data)
{
// Fix &entity\n;
	$data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
	$data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
	$data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
	$data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

// Remove any attribute starting with "on" or xmlns
	$data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

// Remove javascript: and vbscript: protocols
	$data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
	$data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
	$data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

// Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
	$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
	$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
	$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

// Remove namespaced elements (we do not need them)
	$data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

do
{
	// Remove really unwanted tags
	$old_data = $data;
	$data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
}
while ($old_data !== $data);

// we are done...
return $data;
}

?>
