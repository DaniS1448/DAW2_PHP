<h2>Lista de Cities</h2>

<table border="1">
	<tr>
    	<th>Nombre City</th>
    	<th>Nombre País</th>
	</tr>
	<?php foreach($cities as $city):?>
	<tr>
		<td><?= $city ->nombre ?></td>
		<td><?= $city ->pais->nombre ?></td>
	</tr>
	<?php endforeach;?>
</table>
<br>
<a href="<?= base_url() ?>city"><button>VOLVER</button></a><br>