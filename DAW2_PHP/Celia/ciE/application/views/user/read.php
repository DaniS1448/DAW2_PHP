<h2>Users</h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>DNI</th>
		<th>Name</th>
		<th>City(Born)</th>
		<th>Cities(Travelled)</th>
		
	</tr>
	
	<?php foreach ($users as $user): ?>
		<tr>
			<td>
				<?= $user->dni ?>			
			</td>
			
			<td>
				<?= $user->name ?>				
			</td>
			
			<td>
				<?php if($user->cityBorn != null):?>
					<?php foreach($cities as $city):?>
						<?php if($user->cityBorn == $city->id):?>	
							<?= $city->name ?>
						<?php endif;?>
					<?php endforeach;?>
				<?php endif;?>
			</td>
			<td>
				<?php foreach ($user->aggr('ownTravelList','travel') as $travel): ?>
					<?=$travel->travel->name?>
				<?php endforeach;?>
			</td>
		</tr>
	<?php endforeach;?>
</table>


