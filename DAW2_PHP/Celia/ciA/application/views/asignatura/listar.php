<h2>Asignaturas</h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>Nombre</th>
		<th>Nota</th>
	</tr>
	
	<?php foreach ($asignaturas as $asignatura): ?>
		<tr>
			<td>
				<?= $asignatura->nombre?>
			</td>
			<td class="form-inline text-center">
				<form action="<?=base_url()?>nota/listarNotaAsig" method="post">
					<button><a>Notas( )</a></button>
				</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>