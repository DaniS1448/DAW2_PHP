<div class="container">
	<h4>NEW COUNTRY</h4>
	<form action="<?= base_url().'country/cpost' ?>" method="post">
		<label for="name">Name: </label>
		<input type="text" name="name" id="name"/><br><br>
		<input class="btn btn-warning" type="submit" value="Create">
		<a class="btn btn-warning" href="<?= base_url().'country' ?>">Cancel</a>
	</form>
	
</div>