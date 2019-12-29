<h1>Nueva persona</h1>
<form action="personaAddPost.php" method="post">
Nombre <input type="text" name="nombre" />
<br>
Pais nacimiento
<select name="paisNacimiento">
<?php 
require_once 'rb.php';

R::setup('mysql:host=localhost;dbname=test','root','');

$pais=R::findAll('pais');

foreach($pais as $p):?>

<option value="<?= $p->id;?>"> <?= $p->nombre;?> </option>

<?php endforeach;?>
</select>
<br>
Pais residencia
<select name="paisReside">
<?php 

foreach($pais as $p):?>

<option value="<?= $p->id;?>"> <?= $p->nombre;?> </option>

<?php endforeach;?>
</select>

<?php $aficiones=R::findAll('aficion');?>

<h4>Aficiones que te gustan</h4>
<?php foreach($aficiones as $a):?>
<input type="checkbox" name="gusta[]" value="<?= $a->id;?>" id="idG-<?= $a->nombre;?>" /> <label for="idG-<?= $a->nombre;?>"><?= $a->nombre;?> </label>
<?php endforeach;?>

<h4>Aficiones que odias</h4>
<?php foreach($aficiones as $a):?>
<input type="checkbox" name="odia[]" value="<?= $a->id;?>" id="idO-<?= $a->nombre;?>" /> <label for="idO-<?= $a->nombre;?>"><?= $a->nombre;?> </label>
<?php endforeach;?>

<br>
<input type="submit" value="Añadir"/>

</form>
<a href="persona.php"><button>Volver</button></a>
<?php
