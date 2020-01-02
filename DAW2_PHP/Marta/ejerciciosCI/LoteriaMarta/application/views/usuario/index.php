<h2>Crear nuevo uduario</h2>
<form action="<?=base_url()?>usuario/cpost" method="post">
	<label>Nombre</label>
		<input type="text" name="nombre" id="nombre"/><br>
	<label>DNI</label>
		<input type="text" name="dni" id="dni"/><br>

		<input type="submit" value="Crear"/>
</form>
