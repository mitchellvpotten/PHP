<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Delete patient</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['patient_id']?>">
			<label for="name">Name:</label>
			<span><?=$patient['name']?></span>
		</div>
		<div>
			<label for="name">Species:</label>
			<span><?=$patient['species']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>

</body>
</html>