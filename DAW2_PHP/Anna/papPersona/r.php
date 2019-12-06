<a href="<?=base_url()?>persona/c"><button>Nueva persona</button></a>
<hr>
<h1>Lista de personas</h1>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Pais nace</th>
		<th>Pais reside</th>
		<th>Foto</th>
	</tr>
	
	<?php foreach ($personas as $persona): ?>
		<tr>
			<td><?= $persona->id?></td>
			<td><?= $persona->nombre?></td>
			<td><?= $persona->nace==null?'--':$persona->nace->nombre?></td>
			<td><?= $persona->recide==null?'--':$persona->recide->nombre?></td>
			<td><img src="<?= $persona->foto==null?base_url()."assets/img/noname.png":base_url()."assets/img/".$persona->foto?>"  height="20" width="20" /></td>
		</tr>
	<?php endforeach;?>
</table>

