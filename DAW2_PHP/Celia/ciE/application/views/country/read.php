<h2>Countries</h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>Name</th>
		<th>NºCities</th>
	</tr>
	
	<?php foreach ($countries as $country): ?>
		<tr>
			<td>
				<?= $country->name ?>
			</td>
			<td><?= sizeof($country->ownCityList) ?></td>
		</tr>
	<?php endforeach;?>
</table>


		
