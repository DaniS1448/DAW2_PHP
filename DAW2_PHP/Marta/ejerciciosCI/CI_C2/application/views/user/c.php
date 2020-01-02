
<div class="container">
<h2>Create User</h2>
<form action="<?=base_url()?>user/cPost" method="post">
Name user: <input type="text" name="nombre"/><br>
DNI user: <input type="text" name="dni"/><br>
City born: 
<select name="idCity">
	<?php foreach($cities as $city):?>
		<option value="<?=$city->id?>"><?=$city->name?></option>
	<?php endforeach;?>
</select>
<input type="submit" value="Create"/>
</form>
</div>
