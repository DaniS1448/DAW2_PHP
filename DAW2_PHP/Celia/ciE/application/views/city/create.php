<h2>New City</h2>

<form method="post" action="<?=base_url()?>city/createPost">

	Name <input type="text" name="name" required="required"><br />

	Country
	<select name="country" required="required">
		<?php foreach ($countries as $country): ?>
			<option value="<?= $country->id ?>"><?= $country->name ?></option>
		<?php endforeach;?>
	</select>
	<br/>
	
	<input type="submit" value="Create"/>
</form>