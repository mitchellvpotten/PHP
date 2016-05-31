<?php
	require_once "create.logic.php";
	include "../common/header.php";

?>

	<h1>New clients</h1>
	<form method="post">
		<div>
			<label for="clients">Clients:</label>
			<input type="text" id="clients" name="clients">
		</div>
		<label></label>
		<input type="submit" value="Save">
	</form>
<?php
	include "../common/footer.php";
?>