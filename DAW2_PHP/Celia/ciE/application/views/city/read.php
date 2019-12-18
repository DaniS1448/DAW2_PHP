<h2>Cities</h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>Name</th>
		<th>Country</th>
	</tr>
	
	<?php foreach ($cities as $city): ?>
		<tr>
			<td>
				<?= $city->name ?>
			</td>

			<td>
				<?= $city->country->name ?>
			</td>
		</tr>
	<?php endforeach;?>
</table>