<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$paises= R::findAll('pais');
?>
<h1>Nueva persona</h1>
<form action="nuevaPersonaPost.php" method="post">
	
	Nombre
	<input type="text" name="nombre"/>
	<br/>
	Nace

	<select name="idPaisNace">
		<?php foreach ($paises as $pais):?>
		<option value="<?= $pais->id?>">
			<?=$pais->nombre?>
		</option>
		<?php endforeach;?>
	</select>
	
	Recide
	
	<select name="idPaisRecide">
		<?php foreach ($paises as $pais):?>
		<option value="<?= $pais->id?>">
			<?=$pais->nombre?>
		</option>
		<?php endforeach;?>
	</select>
	
	<input type="submit"/>
</form>