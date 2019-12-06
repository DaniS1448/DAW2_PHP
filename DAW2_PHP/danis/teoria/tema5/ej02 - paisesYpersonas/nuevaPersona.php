<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$paises= R::findAll('pais');
$aficiones= R::findAll('aficion');
?>
<a href="listaPersonas.php">
	<button>Volver</button>
</a>

<h1>Nueva persona</h1>
<form action="nuevaPersonaPost.php" method="post">
	
	Nombre
	<input type="text" name="nombre"/>
	<br/>

	Nace	
	<select name="idPais">
		<?php foreach ($paises as $pais):?>
		<option value="<?= $pais->id?>">
			<?=$pais->nombre?>
		</option>
		<?php endforeach;?>
	</select>

	<br/>
	Reside	
	<select name="idPaisReside">
		<?php foreach ($paises as $pais):?>
		<option value="<?= $pais->id?>">
			<?=$pais->nombre?>
		</option>
		<?php endforeach;?>
	</select>
	
	<br/>
	Aficiones que te gustan
	<?php foreach ($aficiones as $aficion):?>
		<input type="checkbox" id="<?= $aficion->id?>" name ="gusta[]" value="<?= $aficion->id?>"/>
		<label for="<?= $aficion->id?>"><?=$aficion->nombre?></label>
	<?php endforeach;?>
	
	<br/>
	Aficiones que odias
	<?php foreach ($aficiones as $aficion):?>
		<input type="checkbox" id="<?= $aficion->id?>" name ="odia[]" value="<?= $aficion->id?>"/>
		<label for="<?= $aficion->id?>"><?=$aficion->nombre?></label>
	<?php endforeach;?>
	
	<br/>
	<input type="submit"/>
</form>