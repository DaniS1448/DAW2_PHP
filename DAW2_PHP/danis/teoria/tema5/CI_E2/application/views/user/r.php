<h2>Lista de Users</h2>

<table border="1">
	<tr>
    	<th>Nombre User</th>
    	<th>Nombre Born</th>
	</tr>
	<?php foreach($users as $user):?>
	<tr>
		<td><?= $user ->nombre ?></td>
		<td><?= $user -> born -> nombre ?></td>
	</tr>
	<?php endforeach;?>
</table>
<br>
<a href="<?= base_url() ?>city"><button>VOLVER</button></a><br>