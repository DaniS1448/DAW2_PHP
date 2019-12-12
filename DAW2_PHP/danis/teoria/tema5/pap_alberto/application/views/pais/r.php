<h1>Lista de países</h1>

<a href="<?=base_url()?>pais/c"><button>Nuevo</button></a>
<a href="<?=base_url()?>"><button>Volver</button></a>

<table border="1">
	<tr>
		<th>Nombre</th>
	</tr>
	
	<?php foreach ($paises as $pais): ?>
		<tr>
			<td><?= $pais->nombre?></td>
		</tr>
	<?php endforeach;?>
</table>

