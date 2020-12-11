<div class="container">
	
	<h2>New travell</h2>

	<form action="<?= base_url(); ?>user/travelledCPost" method="POST">
	
		<label for="idDNI">DNI</label>
		<input type="text" name="dniUser" id="idDNI"/>
		<br/>
		<label for="idName">Name</label>
		<input type="text" name="nameUser" id="idName"/>
		<br/>
		
		<label for="idC">Country (born)</label>
		<select name="idCountryBorn" id="idC">
			<?php foreach ($countries as $country):?>
				<option value="<?= $country->id ?>"><?= $country->name ?></option>
			<?php endforeach;?>
		</select>
		<br/>
		<br/>
		<input class="btn btn-info" type="submit" value="Create"/>
		<a href="<?= base_url(); ?>" class="btn btn-info">Cancel</a>
	</form>
</div>
