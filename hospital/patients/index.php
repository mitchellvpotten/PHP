<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Patients</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th><a href='index.php?sort=name&ascdesc=<?=$ascdesc?>'>Pet Name</a></th>
					
				<th><a href='index.php?sort=clients&ascdesc=<?=$ascdesc?>'>Client</a></th>


				<th><a href='index.php?sort=species&ascdesc=<?=$ascdesc?>'>Species</a></th>

				<th><a href='index.php?sort=gender&ascdesc=<?=$ascdesc?>'>Gender</a></th>

				<th><a href='index.php?sort=status&ascdesc=<?=$ascdesc?>'>Status</a></th>

					<th></th>
					<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['name']?></td>
				<td><?=$patient['clients']?></td>
				<td><?=$patient['species']?></td>
				<td><?=$patient['gender']?></td>
				<td><?=$patient['status']?></td>
				<td class="center"><a href="edit.php?id=<?=$patient['patient_id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$patient['patient_id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>