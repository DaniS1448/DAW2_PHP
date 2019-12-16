<h2>Alumnos</h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Notas</th>
	</tr>
	
	<?php foreach ($alumnos as $alumno): ?>
		<tr>
			<td>
				<?= $alumno->nombre?>
			</td>
			<td>
				<?= $alumno->apellido?>
			</td>
			<td class="form-inline text-center">
				<form action="<?=base_url()?>nota/listarNotaAlumno" method="post">
					<button><a>Notas( )</a></button>
				</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>