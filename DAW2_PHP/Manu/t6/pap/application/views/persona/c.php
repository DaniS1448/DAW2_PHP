<h1>Insertar persona</h1>
<form action="cPost" method="post" enctype="multipart/form-data">
Nombre<input type="text" name="nombre"/>

Sube una imagen:<input type="file" name="imagen" accept="image/png, .jpeg, .jpg, image/gif"/>

<br>
<br>

Pais nacimiento
<select name="nacimiento">
<?php foreach($paises as $pais):?>
	<option value="<?= $pais->id?>"><?= $pais->nombre?></option>
<?php endforeach;?>
</select>

<br>
<br>

Pais residencia
<select name="reside">
<?php foreach($paises as $pais):?>
	<option value="<?= $pais->id?>"><?= $pais->nombre?></option>
<?php endforeach;?>
</select>

<br>
<br>

Aficiones que gusta
<br>
<?php foreach($aficiones as $aficion):?>
	<input type="checkbox" name="aficionesGusta[]" id="idG-<?=$aficion->id; ?>" value="<?=$aficion->id ;?>"/>
	<label for="idG-<?=$aficion->id; ?>"><?=$aficion->nombre; ?></label> 
<?php endforeach;?>

<br>
<br>

Aficiones que odia
<br>
<?php foreach($aficiones as $aficion):?>
	<input type="checkbox" name="aficionesOdia[]" id="idO-<?=$aficion->id; ?>" value="<?=$aficion->id; ?>"/>
	<label for="idO-<?=$aficion->id; ?>"><?=$aficion->nombre; ?></label>
<?php endforeach;?>

<br>
<br>
<input type="submit" value="Añadir"/>
</form>