<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$paises = R::findAll('pais');
?>
<h1>Lista de países</h1>
<a href="nuevoPais.php">
	<button>Nuevo</button>
</a>
<br />
<table border="1">
	<tr>
		<th>Nombre</th>
	</tr>
	
	<?php foreach ($paises as $pais): ?>
	<tr>
		<td>
			<a href="listaNacidos.php?id=<?= $pais->id ?>"><?= $pais->nombre ?></a>
		</td>
		<td>
			<form action="borrarPais.php" method="post" >
				<input type="hidden" name="id" value="<?=$pais->id?>" >
				<button type="submit">
				<img src="img/trash.svg" height="20" width="20" />
				</button>
			</form>
		
		</td>
	</tr>
	<?php endforeach;?>
</table>