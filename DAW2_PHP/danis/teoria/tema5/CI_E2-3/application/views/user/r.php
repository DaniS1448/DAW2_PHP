<div class="container">
	
	<a href="<?= base_url(); ?>city/c" class="btn btn-info">Create city</a>
	
	<h2>Users</h2>

	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<td>DNI</td>
				<td>Name</td>
				<td>Country (born)</td>
				<td>Cities (travelled)</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users as $user):?>
				<tr>
					<td><?= $user->dni ?></td>
					<td><?= $user->name ?></td>
					<td><?= $user->born->name ?></td>
					<td>
						<?php foreach($user->ownTravelledList as $travel):?>
							<?= $travel->city->name ?>, 
						<?php endforeach;?>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
