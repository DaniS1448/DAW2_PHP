<h2>Lista de paises</h2>

<table border="1">
	<tr>
		<th>Nombre</th>
		<th>Cities</th>
	</tr>
	<?php foreach($paises as $pais):?>
	<tr>
		<td><?= $pais->nombre ?></td>
		<td><?= sizeof($pais->ownCityList) ?></td>
	</tr>
	<?php endforeach;?>
	
</table>
<br>
<a href="<?= base_url() ?>pais"><button>VOLVER</button></a><br>