<div class="container">
	
	<a href="<?= base_url(); ?>country/c" class="btn btn-info">Create country</a>
	
	<h2>Countries</h2>

	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<td>Name</td>
				<td>Nº cities</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($countries as $country):?>
				<tr>
					<td><?= $country->name ?></td>
					<td><?= sizeof($country->ownCityList); ?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
