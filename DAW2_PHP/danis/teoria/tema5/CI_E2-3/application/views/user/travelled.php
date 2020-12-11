<div class="container">

	<h2>Register travell</h2>

	<form action="<?= base_url(); ?>user/travelledCPost" method="POST">
	
		<label for="idU">User</label>
		<select name="idUser" id="idU">
			<?php foreach ($users as $user):?>
				<option value="<?= $user->id ?>"><?= $user->dni ?> (<?= $user->name ?>)</option>
			<?php endforeach;?>
		</select>
		<br/>
		<?php foreach ($cities as $city):?>
    		<label for="idC-<?= $city->id ?>"><?= $city->name ?></label>
    		<input type="checkbox" name="idsCitiesTravelled[]" value="<?= $city->id ?>" id="idC-<?= $city->id ?>"/>
		<?php endforeach;?>

		<br/>
		<br/>
		<input class="btn btn-info" type="submit" value="Create"/>
		<a href="<?= base_url(); ?>" class="btn btn-info">Cancel</a>
	</form>
</div>
