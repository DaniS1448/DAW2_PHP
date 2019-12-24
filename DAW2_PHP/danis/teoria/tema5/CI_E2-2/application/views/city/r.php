<div class="container">
	<h4>COUNTRIES</h4>
	<table class="table table-striped table-hover">
		<tr>
			<th>NAME</th>
			<th>COUNTRY</th>
		</tr>
		
		<?php foreach ($cities as $city):?>
		<tr>
			<td><?= $city->name ?></td>
			<td><?= $city->country->name ?></td>
		</tr>
		<?php endforeach;?>
	</table>	
</div>