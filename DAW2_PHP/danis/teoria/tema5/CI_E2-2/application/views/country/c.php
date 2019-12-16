<div class="container">
	<h4>NEW COUNTRY</h4>
	<form action="<?= base_url().'country/cpost' ?>" method="post">
		<label for="nombre">Name: </label>
		<input type="text" name="nombre" id="nombre"/><br>
		<input class="btn btn-info" type="submit" value="Create">
		<a class="btn btn-info" href="<?= base_url().'country' ?>">Cancel</a>
	</form>
	
</div>