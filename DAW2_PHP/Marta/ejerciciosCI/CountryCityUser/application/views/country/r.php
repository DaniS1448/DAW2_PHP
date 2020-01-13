<div class="container">
    <h2>Countries list</h2>
    <table  class="table table-striped table-hover">
        <thead>
        	<tr>
        		<th>Name</th>
        		<th>Nº cities</th>
        		<th>Cities names</th>
        	<tr>
        </thead>
        <tbody>
        	<?php foreach($paises as $pais):?>
        		<tr>
        			<td><?=$pais->name?></td>
        			<td><?=sizeof($pais->ownCityList)?></td>
        			<td>
        				<?php foreach ($pais->ownCityList as $city):?>
        					<?=$city->name?>, 
        				<?php endforeach;?>
        			</td>
        		</tr>
        	<?php endforeach;?>
        </tbody>
    
    </table>
</div>