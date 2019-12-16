
<h2>Nueva Nota</h2>

<form method="post" action="<?=base_url()?>nota/crearPost">

	Nota <input type="number" name="nota" required="required" maxlength="2" size="2" pattern="[0-9]{1,2}"/>	<br/>
	
	Alumno 
	<select name="alumno">
		<?php foreach ($alumnos as $alumno): ?>
			<option value="<?= $alumno->id ?>"><?= $alumno->nombre . $alumno->apellido ?></option>
		<?php endforeach;?>
	</select>
	<br/>

	<!-- <fieldset><legend>Asignaturas</legend> 
		<?php foreach ($asignaturas as $asignatura): ?>
			<input type="radio" name="asignatura[]" id="id-<?=$asignatura->id?>" value="<?=$asignatura->id?>">
			<label for="id-<?=$asignatura->id?>"><?=$asignatura->nombre?></label>			
		<?php endforeach;?>
	</fieldset> -->
	<br/>
	
	<input type="submit" value="Crear"/>
</form>


<form action="<?=base_url()?>/">
	<input type="submit" value="Volver"/>
</form>