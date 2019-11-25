<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');
R::setAutoResolve( TRUE );
$personas = R::findAll('persona');
//$pais = R::findAll('pais');
//$personas->fetchAs('nace')->pais->nombre;
//$personasNace = $personas-> alias( 'nace' ) ->ownPaisList;
?>
<h1>Lista de personas</h1>
<a href="nuevaPersona.php">
	<button>Nueva</button>
</a>
<br />
<table border="1">
	<tr>
		<th>Nombre</th>
		<th>Nace</th>	
		<th>Recide</th>
		<th>Acción</th>
	</tr>
	
	<?php foreach ($personas as $persona): ?>
	<tr>
		<td>
			<?= $persona->nombre ?>
			</td><td>
			<?= $persona->nace==null?'--':$persona->nace->nombre?>
		</td>
		<td>
			<?= $persona->recide==null?'--':$persona->recide->nombre?>
		</td>
		<td>
			<form action="borrarPersona.php" method="post" >
				<input type="hidden" name="id" value="<?=$persona->id?>" >
				<button type="submit">
				<img src="img/trash.svg" height="20" width="20" />
				</button>
			</form>
		
		</td>
	</tr>
	<?php endforeach;?>
</table>