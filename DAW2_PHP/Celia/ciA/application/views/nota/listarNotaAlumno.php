<h2>Notas de <?= $nombre . ' ' . $apellido ?></h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>Asignatura</th>
		<th>Nota</th>
	</tr>
	
	<?php foreach ($notas as $nota): ?>
		<tr>
			<td>
				<?php foreach ($asignaturas->alias('calificacion')->ownAsignaturaList as $asignatura): ?>
					<?=$asignatura->nombre?>
				<?php endforeach;?>
			</td>
			
			<td>
				<?= $nota->numero ?>
			</td>
		</tr>
	<?php endforeach;?>
</table>

<form action="<?=base_url()?>/">
	<input type="submit" value="Volver"/>
</form>