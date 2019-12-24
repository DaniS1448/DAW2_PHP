<div class="container">
	<h4>USERS</h4>
	<table class="table table-striped table-hover">
		<tr>
			<th>NAME</th>
			<th>DNI</th>
			<th>CITY (born)</th>
			<th>CITIES (travelled)</th>
		</tr>
		
		<?php foreach ($users as $user):?>
		<tr>
			<td><?= $user->name ?></td>
			<td><?= $user->dni ?></td>
			<td><?= $user->born->name ?></td>
			<td>
				<?php foreach ($user -> aggr ('ownTravelledList', 'city') as $travel):?>
					<?= $travel->name ?>, 
				<?php endforeach;?>
			</td>
		</tr>
		<?php endforeach;?>
	</table>	
</div>