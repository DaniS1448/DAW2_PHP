
<h2>Nueva Asignatura</h2>
<form method="post" action="<?=base_url()?>asignatura/crearPost">
	Nombre: <input type="text" name="nombre" required="required">
	<br/>
	<input type="submit" value="Crear"/>
</form>

<form action="<?=base_url()?>/">
	<input type="submit" value="Volver"/>
</form>