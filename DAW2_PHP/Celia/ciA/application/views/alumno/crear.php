
<h2>Nuevo Alumno</h2>
<form method="post" action="<?=base_url()?>alumno/crearPost">
	Nombre: <input type="text" name="nombre" required="required"><br/>
	Apellido: <input type="text" name="apellido" required="required">
	<br/>
	<input type="submit" value="Crear"/>
</form>

<form action="<?=base_url()?>/">
	<input type="submit" value="Volver"/>
</form>