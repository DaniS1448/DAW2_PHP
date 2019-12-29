<h2>Paises</h2>

<a href="<?=base_url() ?>"><button>Volver</button></a>
<a href="<?=base_url() ?>pais/c"><button>Añadir pais</button></a>

<br>

<table border="1">
<tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>Numero de ciudades</th>
</tr>
<?php foreach($paises as $pais):?>

<tr>
	<td><?=$pais->id ?></td>
	<td><?=$pais->nombre ?></td>
	<td><?= sizeof($pais->ownCiudadList)?></td>
</tr>

<?php endforeach;?>

</table>