<?php
require_once 'rb.php';

$idPais=$_GET['id'];
R::setup('mysql:host=localhost;dbname=test','root','');

$pais=R::load('pais',$idPais);
?>

<h2>Nacidos</h2>
<ul>
	<?php foreach ($pais->ownPersonaList as $persona):?>
		<li><?= $persona->nombre?></li>
	<?php endforeach;?>
</ul>
<h2>Reside</h2>
<ul>
	<?php 
	$pais=R::load('pais',$idPais);
	foreach ($pais->alias('reside')->ownPersonaList as $persona):?>
		<li><?= $persona->nombre?></li>
	<?php endforeach;?>
</ul>
<a href="pais.php">Volver</a>