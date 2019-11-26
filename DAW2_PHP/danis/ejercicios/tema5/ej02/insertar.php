<form action="insertarPost.php" method="post">
	Nombre producto: <input type="text" name="nombre"><br>
	Precio producto: <input type="text" name="precio"><br>
	<input type="submit" value="Insertar">
</form>
<br>
<?php require_once '../util.php'; echo pintarProductos();?>
