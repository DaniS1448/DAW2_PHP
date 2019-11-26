<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');
R::setAutoResolve(true);

$personas = R::findAll('persona');
?>
<h1>Lista de personas</h1>

<a href="menu.php">
	<button>Volver</button>
</a>

<a href="nuevaPersona.php">
	<button>Nueva</button>
</a>

<br />
<table border="1">
	<tr>
		<th>Nombre</th>
		<th>País nac.</th>
		<th>País res.</th>
		<th>Af. gusta</th>
		<th>Af. odia</th>
		<th>Acción</th>
	</tr>
	
	<?php foreach ($personas as $persona): ?>
	<tr>
		<td>
			<?= $persona->nombre ?>
		</td>
		
		<td>
			<?= $persona->nace==null?'--':$persona->nace->nombre?>
		</td>
		
		<td>
			<?= $persona->reside==null?'--':$persona->reside->nombre?>
		</td>
		
		<td>
			<?php
                $gustaList = $persona -> aggr ('ownAficiongustaList', 'aficion');
                foreach ($gustaList as $relGusta){
                    echo $relGusta->nombre." ";
                }
			?>
		</td>
		
		<td>
			<?php
                $odiaList = $persona -> aggr ('ownAficionodiaList', 'aficion');
                foreach ($odiaList as $relOdia){
                    echo $relOdia->nombre." ";
                }
			?>
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

