<div class="container">
	<h4>NEW USER</h4>
	<form action="<?= base_url().'user/cpost' ?>" method="post" class="form">
		<label for="name">Name: </label>
		<input type="text" name="name" id="name"/><br><br>
		
		<label for="dni">DNI: </label>
		<input type="text" name="dni" id="dni"/><br><br>
		
		<label for="idCityBorn">City (born): </label>
		<select name="idCityBorn" id="idCityBorn">
			<?php foreach ($cities as $city):?>
				<option value="<?= $city->id?>"><?= $city->name?></option>
			<?php endforeach;?>
		</select>
		<br><br>
		<input class="btn btn-warning" type="submit" value="Create">
		<a class="btn btn-warning" href="<?= base_url().'city' ?>">Cancel</a>
	</form>
	
</div>