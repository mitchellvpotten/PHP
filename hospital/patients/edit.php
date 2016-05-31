<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patient</h1>
	<form method="post">
		<div>

			<input type="hidden" name="id" value="<?=$patient['patient_id']?>">

			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patient['name']?>">
		</div>
		<div>
			<label for="name">Species:</label>
			<input type="text" id="species" name="species" value="<?=$patient['species']?>">
		</div>
		<div>
			<label for="name">gender:</label>
			<input type="radio" name="gender" value="male" required> Male
			<input type="radio" name="gender" value="female"required> Female
		</div>
		<div>
			<label for="name">Problemen:</label>
			<textarea id="status" name="status"><?=$patient['status']?></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>