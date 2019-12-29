<h2>Registrar vuelo</h2>

<form action="registrarVueloPost" method="post">

Persona 
<select name="persona">

<?php foreach($personas as $persona):?>

	<option value="<?=$persona->id ?>"><?=$persona->dni ?> (<?=$persona->nombre ?>)</option>

<?php endforeach;?>

</select>

<br>
<br>
Ciudades
<br>

<?php foreach($ciudades as $ciudad):?>
<input type="checkbox" name="ciudades[]" value="<?=$ciudad->id ?>" id="id-<?=$ciudad->id ?>"/><label for="id-<?=$ciudad->id ?>"><?=$ciudad->nombre ?> (<?=$ciudad->pais->nombre ?>)</label>
<?php endforeach;?>

<br>
<br>

<input type="submit" value="Registrar"/>
</form>

<a href="<?=base_url() ?>persona/r"><button>Volver</button></a>