<h1>Lista de personas</h1>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Nombre</th>
	</tr>
	
	<?php foreach ($personas as $persona): ?>
		<tr>
			<td><?= $persona->id?></td>
			<td><?= $persona->nombre?></td>
		</tr>
	<?php endforeach;?>
</table>