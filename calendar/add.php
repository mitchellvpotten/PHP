<!DOCTYPE html>
<html>
<head>
	<title>calendar</title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

</head>
<body>
	<form action="confirm.php"  method="post">
	<h1>Vul hier uw gegevens in.</h1>
	<input type="text" name="person" placeholder="naam"> 
	
	<?php
		if (isset($_POST['toevoegen'])) {
		$string = $_POST['toevoegen'];		 
		$toevoegen = strip_tags($string);
		//$sql = "INSERT INTO birthdays (omschrijving, hour, datum) VALUES ('$toevoegen', '$hour', '$month')"; 
		$result = mysqli_query($con, $sql);
		$value = $toevoegen;
		setcookie("gaben@sexy", $value, time()+63158399);
		var_dump($toevoegen);
	} ?>
	
	<select name="day">
<?php
  for ($i = 1; $i <= 31; ++$i) {
    printf('<option value="%s">%s</option>', $i, $i);
  }
  ?>
	</select>


	<select name="month">
<?php
  for ($i = 1; $i <= 12; ++$i) {

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