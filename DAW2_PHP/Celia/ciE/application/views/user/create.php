
<h2>New User</h2>

<form method="post" action="<?=base_url()?>user/createPost">

	DNI <input type="text" name="dni" required="required"><br/>

	Name <input type="text" name="name" required="required"><br/>

	Born 
	<select name="city">
		<?php foreach ($cities as $city): ?>
			<option value="<?= $city->id ?>"><?= $city->name . '(' . $city->country->name . ')' ?></option>
		<?php endforeach;?>
	</select>
	<br/>

	<input type="submit" value="Create"/>
</form>
