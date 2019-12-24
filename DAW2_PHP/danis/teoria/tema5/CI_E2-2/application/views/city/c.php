<div class="container">
	<h4>NEW CITY</h4>
	<form action="<?= base_url().'city/cpost' ?>" method="post" class="form">
		<label for="name">Name: </label>
		<input type="text" name="name" id="name"/><br><br>
		
		<label for="country">Contry: </label>
		<select name="idCountry" id="country">
			<?php foreach ($countries as $country):?>
				<option value="<?= $country->id?>"><?= $country->name?></option>
			<?php endforeach;?>
		</select>
		<br><br>
		<input class="btn btn-warning" type="submit" value="Create">
		<a class="btn btn-warning" href="<?= base_url().'city' ?>">Cancel</a>
	</form>
	
</div>