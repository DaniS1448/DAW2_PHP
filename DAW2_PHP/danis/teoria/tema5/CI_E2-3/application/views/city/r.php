<div class="container">
	
	<a href="<?= base_url(); ?>city/c" class="btn btn-info">Create city</a>
	
	<h2>Cities</h2>

	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<td>Name</td>
				<td>Country</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($cities as $city):?>
				<tr>
					<td><?= $city->name ?></td>
					<td><?= $city->country->name ?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
