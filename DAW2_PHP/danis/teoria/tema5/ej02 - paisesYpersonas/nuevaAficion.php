<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');

?>
<a href="listaAficiones.php">
	<button>Volver</button>
</a>

<h1>Nueva afición</h1>
<form action="nuevaAficionPost.php" method="post">
	
	Nombre
	<input type="text" name="nombre"/>
	<br/>

	<input type="submit"/>
</form>