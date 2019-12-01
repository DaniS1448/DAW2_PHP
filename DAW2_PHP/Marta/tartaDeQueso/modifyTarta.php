<?php 
require_once 'rb.php';
R::setup('mysql:host=localhost; dbname=tartas', 'root','');
R::setAutoResolve(true);

$ingredientes=R::findAll('ingredientes');


$id=$_GET['id'];
$tarta=R::load('tarta', $id);
?>
<h2>Modifica los datos de tu tarta</h2>

<form action="modifyTartaPost.php?id=<?= $tarta->id?>" method="post">
Nombre <input type="text" name="nombre" value="<?= $tarta->nombre?>"/>
Peso <input type="number" name="peso" value="<?= $tarta->peso?>"/>
<fieldset>
<legend>Ingredientes</legend>
	<?php foreach ($ingredientes as $ingrediente):?>
	
	<?php
	
	$ingDeLaTarta = $tarta -> sharedIngredientesList;
	$comprobadorIng = false;
	foreach ($ingDeLaTarta as $cadaIngrediente){
	    //echo "<script>alert('$ingrediente->id - $cadaIngrediente->id');</script>";
	    if($ingrediente->id == $cadaIngrediente->id){
	        $comprobadorIng = true;
	    }
	}
	
	if ($comprobadorIng) {
	    $ingCK='checked';
	} else {
	    $ingCK='';
	}
	?>
	
	<input type="checkbox" name="ingredientes[]" value="<?= $ingrediente->id?>" id="id-<?=$ingrediente->id?>"<?= $ingCK ?>/><label for="id-<?=$ingrediente->id?>"><?=$ingrediente->nombre ?></label>
	
	<?php endforeach;?>
	</fieldset>
<input type="submit" value="Enviar"/>
</form>