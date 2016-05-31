<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit clients</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$clients['clients_id']?>">
			<label for="name">Clients:</label>
			<input type="text" id="clients" name="clients" value="<?=$clients['clients']?>">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>