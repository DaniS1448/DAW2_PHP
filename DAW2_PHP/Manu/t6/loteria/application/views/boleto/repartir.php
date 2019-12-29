<h3>Repartir boleto</h3>

<form action="repartirDos" method="post">

Seleccionar boleto :
<select name="boleto">

<?php 

$boletos = $persona -> aggr ('ownPersonaboletosList', 'boleto' );
?>
	<?php foreach($boletos as $boleto):?>
		<option value="<?=$boleto->id ?>"><?=$boleto->numero ?></option>
	<?php endforeach;?>
</select>

<br>
<br>

Seleccionar persona a repartir:
<select name="persona">
	<?php foreach($personas as $p):?>
		<option value="<?=$p->id ?>"><?=$p->nombre ?></option>
	<?php endforeach;?>
</select>

<br>
<br>

<input type="submit" value="Siguiente"/>
</form>