<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Species</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Species</th>
				<th></th>
				<th></th>
			</tr>	
		</thead>
		</tboddy>
<?php
	foreach($species as $specie):
?>
		<tr>
			<td><?=$specie['species']?></td>		
			<td class="center"><a href="edit.php?id=<?=$specie['id']?>">edit</a></td>
			<td class="center"><a href="delete.php?id=<?=$specie['id']?>">delete</a></td>
		</tr>
<?php
	endforeach;
?>

		</tboddy>
	</table>

<?php
	include "../common/footer.php";
?>