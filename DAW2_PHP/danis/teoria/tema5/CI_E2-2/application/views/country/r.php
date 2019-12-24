<div class="container">
	<h4>COUNTRIES</h4>
	<table class="table table-striped table-hover table-fit">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>Nº CITIES</th>
		</tr>
		
		<?php foreach ($countries as $country):?>
		<tr>
			<td><?= $country->id ?></td>
			<td><?= $country->name ?></td>
			<td>
				<?php
				$contador = 0;
				foreach ($country->ownCityList as $city){
				    $contador++;
				}
				echo $contador; 
				?>
			</td>
		</tr>
		<?php endforeach;?>
	</table>	
</div>