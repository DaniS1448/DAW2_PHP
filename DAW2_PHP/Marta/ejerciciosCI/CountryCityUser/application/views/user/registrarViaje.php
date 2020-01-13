
<div class="container">
<h2>Register travel</h2>
<form action="<?=base_url()?>user/registrarViajePost" method="post">
<select name="idUser">
	<?php foreach($users as $user):?>
		<option value="<?=$user->id?>"><?=$user->dni?> (<?=$user->name?>)</option>
	<?php endforeach;?>
</select>
<br>
Cities travelled 
	<?php foreach ($cities as $city):?>
		<input id="c<?=$city->id?>" type="checkbox" name="idCities[]" value="<?=$city->id?>"/> <label for="c<?=$city->id?>"><?=$city->name?> </label>
	<?php endforeach;?>
<br>
<input type="submit" value="Register"/>
</form>
</div>
