<h2>Añadir persona</h2>

<form action="cPost" method="post">

Nombre de la persona<input type="text" name="nombre"/>
<br>
DNI<input type="text" name="dni"/>
<br>
Pais nacimiento
<select name="pais">
<?php foreach ($paises as $pais):?>

	<option value="<?=$pais->id ?>"><?=$pais->nombre ?></option>

<?php endforeach;?>
</select>

<br>
<input type="submit" value="Añadir"/>

</form>
<a href="<?=base_url() ?>persona/r"><button>Volver</button></a>
