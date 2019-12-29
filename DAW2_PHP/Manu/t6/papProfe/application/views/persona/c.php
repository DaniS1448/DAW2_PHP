<h1>Nuevo país</h1>

<form action="<?=base_url()?>persona/cPost" method="post">
	<label for="idp">Nombre</label>
	<input id="idp" type="text" name="nombre"/>

<br>
Pais nacimiento
<select name="paisNacimiento">
<?php 
foreach($paises as $p):?>

<option value="<?= $p->id;?>"> <?= $p->nombre;?> </option>

<?php endforeach;?>
</select>
<br>
Pais residencia
<select name="paisReside">
<?php 

foreach($paises as $p):?>

<option value="<?= $p->id;?>"> <?= $p->nombre;?> </option>

<?php endforeach;?>
</select>
<br>
<input type="submit"/>
</form>	