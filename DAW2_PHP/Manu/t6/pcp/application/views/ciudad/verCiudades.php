<h2>Ciudades</h2>

<a href="<?=base_url() ?>"><button>Volver</button></a>
<a href="<?=base_url() ?>ciudad/c"><button>Añadir ciudad</button></a>

<br>

<table border="1">
<tr>
	<th>ID</th>
	<th>Ciudad</th>
	<th>Pais</th>
</tr>
<?php foreach($ciudades as $ciudad):?>

<tr>
	<td><?=$ciudad->id ?></td>
	<td><?=$ciudad->nombre ?></td>
	<td><?=$ciudad->pais->nombre ?></td>
</tr>

<?php endforeach;?>

</table>