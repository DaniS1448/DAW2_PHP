<h2>Lista de Users</h2>

<table border="1">
	<tr>
		<th>DNI</th>
    	<th>Nombre User</th>
    	<th>Nombre Born</th>
	</tr>
	<?php foreach($users as $user):?>
	<tr>
		<td><?= $user ->dni ?></td>
		<td><?= $user ->nombre ?></td>
		<!-- <td><?= $user -> aggr ( 'ownBornList', 'city' ) ?></td> -->
		
		<td><?= $user->born->nombre ?></td>
	</tr>
	<?php endforeach;?>
</table>
<br>
<a href="<?= base_url() ?>user"><button>VOLVER</button></a><br>