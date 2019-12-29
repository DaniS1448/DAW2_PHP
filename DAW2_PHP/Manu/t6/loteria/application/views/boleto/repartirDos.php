<h3>Repartir boleto</h3>
<form action="repartirPost" method="post">

¿Cuanto quieres repartir?

<select name="cantidad">
	<?php for($i=1;$i<$cantidad;$i++):?>
		<option value="<?=$i ?>"><?=$i ?></option>
	<?php endfor;?>
</select>

<input type="hidden" name="boleto" value="<?=$boleto?>"/>
<input type="hidden" name="persona" value="<?=$persona ?>"/>

<br>
<input type="submit" value="Repartir"/>
</form>