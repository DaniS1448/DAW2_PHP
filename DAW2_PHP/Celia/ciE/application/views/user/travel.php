<h2>Register Travel</h2>

<form action="<?= base_url()?>user/registerTravelPost" method="post">

	DNI <input type="text" name="dni" required="required"/><br/>
	
	<fieldset>
		<legend>Travel</legend>
		<?php  foreach($cities as $city):?>
			<input type="checkbox" value="<?= $city->id ?>" name="city[]"/> <?= $city->name . '(' . $city->country->name . ')' ?>
		<?php endforeach;?>
	</fieldset>

	<input type="submit" value="Create"/>

</form>