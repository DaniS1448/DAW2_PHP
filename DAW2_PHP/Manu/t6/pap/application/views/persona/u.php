<h1>Modificar persona</h1>
<form action="uPost" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?=$persona->id ?>"/>
Nombre<input type="text" name="nombre" value="<?=$persona->nombre ?>"/>

<br>
<br>
Foto actual: 
<img src="<?=base_url()."assets/img/".$persona->imagen ?>" width="80px" height="80px"><input type="file" name="imagen"/>

<br>
<br>

Pais nacimiento
<select name="nacimiento">
<?php foreach($paises as $pais):?>
<?php $s=$persona->pais_nacimiento->id == $pais->id?"selected":"";?>
	<option value="<?= $pais->id?>" <?=$s ?>><?= $pais->nombre?></option>
<?php endforeach;?>
</select>

<br>
<br>

Pais residencia
<select name="reside">
<?php foreach($paises as $pais):?>
<?php $s=$persona->pais_reside->id == $pais->id?"selected":"";?>
	<option value="<?= $pais->id?>" <?=$s ?>><?= $pais->nombre?></option>
<?php endforeach;?>
</select>

<br>
<br>

Aficiones que gusta
<br>
<?php 
$gusta = $persona -> aggr ('ownAficiongustaList', 'aficion' );
$arrayGustos=[];
foreach ( $gusta as $aficion ) { 
    array_push($arrayGustos, $aficion -> id); 
}
?>
<?php foreach($aficiones as $aficion):?>
<?php $check=in_array($aficion->id,$arrayGustos)?"checked":"";?>
	<input type="checkbox" name="aficionesGusta[]" id="idG-<?=$aficion->id; ?>" value="<?=$aficion->id ;?>" <?=$check ?>/>
	<label for="idG-<?=$aficion->id; ?>"><?=$aficion->nombre; ?></label> 
<?php endforeach;?>

<br>
<br>

Aficiones que odia
<br>
 <?php 
$odia = $persona -> aggr ('ownAficionodiaList', 'aficion' );  
$arrayOdia=[];
foreach ( $odia as $aficion ) { 
    array_push($arrayOdia, $aficion -> id); 
}
?>
<?php foreach($aficiones as $aficion):?>
<?php $check=in_array($aficion->id,$arrayOdia)?"checked":"";?>
	<input type="checkbox" name="aficionesOdia[]" id="idO-<?=$aficion->id; ?>" value="<?=$aficion->id; ?>" <?=$check ?>/>
	<label for="idO-<?=$aficion->id; ?>"><?=$aficion->nombre; ?></label>
<?php endforeach;?>

<br>
<br>
<input type="submit" value="Añadir"/>
</form>