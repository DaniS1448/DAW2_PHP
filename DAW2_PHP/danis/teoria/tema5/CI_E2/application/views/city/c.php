<h2>CREAR CITY </h2>
<form action="<?= base_url()?>city/cpost" method="post">
	Nombre: <input type="text" name="nombre"/><br>
	<select name="idPais">
		<?php foreach($losPaisesDeCelia as $pais):?>
			<option value="<?= $pais->id ?>"><?= $pais->nombre ?></option>
		<?php endforeach;?>
	</select>
	<br>
	<input type="submit" value="Crear"/>
</form>

<br>
<a href="<?= base_url() ?>city"><button>VOLVER</button></a><br>