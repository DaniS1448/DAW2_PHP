<h2>Countries</h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>Name</th>
	</tr>
	
	<?php foreach ($countries as $country): ?>
		<tr>
			<td>
				<?= $country->name ?>
			</td>
		</tr>
	<?php endforeach;?>
</table>