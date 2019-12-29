<h2>Añadir ciudad</h2>

<form action="cPost" method="post">

Nombre de la ciudad<input type="text" name="nombre"/>
<br>
Pais
<select name="pais">
<?php foreach ($paises as $pais):?>

	<option value="<?=$pais->id ?>"><?=$pais->nombre ?></option>

<?php endforeach;?>
</select>

<br>
<input type="submit" value="Añadir"/>

</form>
<a href="<?=base_url() ?>ciudad/r"><button>Volver</button></a>
