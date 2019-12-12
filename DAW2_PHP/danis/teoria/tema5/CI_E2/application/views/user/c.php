<h2>CREAR USER </h2>
<form action="<?= base_url()?>user/cpost" method="post">
	DNI: <input type="text" name="dni"/><br>
	Nombre: <input type="text" name="nombre"/><br>
	Born: 
	<select name="idCity">
		<?php foreach($lasCiudadesDeCelia as $city):?>
			<option value="<?= $city->id ?>"><?= $city->nombre ?></option>
		<?php endforeach;?>
	</select>
	<br>
	<input type="submit" value="Crear"/>
</form>

<br>
<a href="<?= base_url() ?>user"><button>VOLVER</button></a><br>