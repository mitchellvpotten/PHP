<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Clients</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Clients</th>
				<th></th>
				<th></th>

			</tr>
		</thead>
		</tbody>
<?php
	foreach($clients as $client):

?>
			<tr>
				<td><?=$client['clients']?></td>
				<td class="center"><a href="edit.php?id=<?=$client['clients_id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$client['clients_id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>