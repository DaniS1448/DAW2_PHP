<div class="container">
	
	<h2>New city</h2>

	<form action="<?= base_url(); ?>city/cPost" method="POST">
		<label for="idName">Name</label>
		<input type="text" name="nameCity" id="idName"/>
		<br/>
		<label for="idC">Country</label>
		<select name="idCountry" id="idC">
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
