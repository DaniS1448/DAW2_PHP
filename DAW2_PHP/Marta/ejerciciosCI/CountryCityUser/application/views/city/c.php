
<div class="container">
<h2>Create country</h2>
<form action="<?=base_url()?>city/cPost" method="post">
Name city: <input type="text" name="nombre"/><br>
Country: 
<select name="idPais">
	<?php foreach($paises as $pais):?>
		<option value="<?=$pais->id?>"><?=$pais->name?></option>
	<?php endforeach;?>
</select>
<input type="submit" value="Create"/>
</form>
</div>
