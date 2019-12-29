<h1>Lista de aficiones</h1>

<a href="<?=base_url()?>aficion/c"><button>Nuevo</button></a>
<table border="1">
	<tr>
		<th>Nombre</th>
	</tr>
	
	<?php foreach ($aficiones as $aficion): ?>
		<tr>
			<td><?= $aficion->nombre?></td>
		</tr>
	<?php endforeach;?>
</table>

