<h2><?= $nombre ?></h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>Alumno</th>
		<th>Nota</th>
	</tr>
	
	<?php foreach ($notas as $nota): ?>
		<tr>
			<td>
				<?php if ($nota->alumno != null): ?>
					<?= $nota->alumno ?>
				<?php endif;?>
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