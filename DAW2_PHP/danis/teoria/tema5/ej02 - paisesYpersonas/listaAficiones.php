<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');
R::setAutoResolve(true);

$aficiones = R::findAll('aficion');
?>
<h1>Lista de aficiones</h1>

<a href="menu.php">
	<button>Volver</button>
</a>

<a href="nuevaAficion.php">
	<button>Nueva</button>
</a>

<br />
<table border="1">
	<tr>
		<th>Nombre</th>
		<th>Acción</th>
	</tr>
	
	<?php foreach ($aficiones as $aficion): ?>
	<tr>
		<td>
			<?= $aficion->nombre ?>
		</td>
		
		<td>
			<form action="borrarPersona.php" method="post" >
				<input type="hidden" name="id" value="<?=$aficion->id?>" >
				<button type="submit">
				<img src="img/trash.svg" height="20" width="20" />
				</button>
			</form>
		
		</td>
	</tr>
	<?php endforeach;?>
</table>

