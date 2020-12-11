<div class="container">
	
	<h2>New country</h2>

	<form action="<?= base_url(); ?>country/cPost" method="POST">
		<label for="idName">Name</label>
		<input type="text" name="nameCountry" id="idName"/>
		<br/>
		<br/>
		<input class="btn btn-info" type="submit" value="Create"/>
		<a href="<?= base_url(); ?>" class="btn btn-info">Cancel</a>
	</form>
</div>
