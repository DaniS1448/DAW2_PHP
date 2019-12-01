<?php 
require_once 'rb.php';
R::setup('mysql:host=localhost; dbname=tartas', 'root','');

$ingredientes=R::findAll('ingredientes');

?>

<h2>Introduce los datos de tu tarta</h2>

<form action="addTartaPost.php" method="post">
	Nombre <input type="text" name="nombre"/>
	Peso <input type="number" name="peso"/>
	<fieldset>
	<legend>Ingredientes</legend>
	<?php foreach ($ingredientes as $ingrediente):?>
	<input type="checkbox" name="ingredientes[]" value="<?= $ingrediente->id?>" id="id-<?=$ingrediente->id?>"/><label for="id-<?=$ingrediente->id?>"><?=$ingrediente->nombre ?></label>
	<?php endforeach;?>
	</fieldset>
	<input type="submit" value="Enviar"/>
</form>